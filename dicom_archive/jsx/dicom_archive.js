import React, {Component} from 'react';
import PropTypes from 'prop-types';

import Loader from 'Loader';
import FilterableDataTable from 'FilterableDataTable';

/**
 * DICOM Archive Page.
 *
 * Serves as an entry-point to the module, rendering the whole react
 * component page on load.
 *
 * Renders DICOM Archive main page consisting of FilterTable and
 * DataTable components.
 *
 * @author LORIS Team
 * @version 1.0.0
 *
 * */
class DicomArchive extends Component {
  constructor(props) {
    super(props);

    this.state = {
      data: {},
      error: false,
      isLoaded: false,
    };

    this.fetchData = this.fetchData.bind(this);
    this.formatColumn = this.formatColumn.bind(this);
  }

  componentDidMount() {
    this.fetchData()
      .then(() => this.setState({isLoaded: true}));
  }

  /**
   * Retrieve data from the provided URL and save it in state
   *
   * @return {object}
   */
  fetchData() {
    return fetch(this.props.dataURL, {credentials: 'same-origin'})
      .then((resp) => resp.json())
      .then((data) => this.setState({data}))
      .catch((error) => {
        this.setState({error: true});
        console.error(error);
      });
  }

  /**
   * Modify behaviour of specified column cells in the Data Table component
   *
   * @param {string} column - column name
   * @param {string} cell - cell content
   * @param {object} row - row content indexed by column
   *
   * @return {*} a formated table cell for a given column
   */
  formatColumn(column, cell, row) {
    let result = <td>{cell}</td>;
    switch (column) {
      case 'Archive Location': {
        const downloadURL = '/mri/jiv/get_file.php?file=' + cell
            + '&patientName=' + row['Patient Name'];
        result =
          <td>
            <a href={downloadURL}>
              <span className="glyphicon glyphicon-cloud-download"/>
              &nbsp;
              {cell}
            </a>
          </td>;
      }
      break;
      case 'Metadata': {
        const metadataURL = loris.BaseURL +
          '/dicom_archive/viewDetails/?tarchiveID=' + row.TarchiveID;
        result = <td><a href={metadataURL}>{cell}</a></td>;
      }
      break;
      case 'MRI Browser': {
        if (row.SessionID === null || row.SessionID === '') {
          result = <td>&nbsp;</td>;
        } else {
          let mrlURL = loris.BaseURL + '/imaging_browser/viewSession/?sessionID=' +
            row.SessionID;
          result = <td><a href={mrlURL}>{cell}</a></td>;
        }
      break;
      }
      case 'INVALID - HIDDEN':
        result = <td className="text-danger">{cell}</td>;
      break;
    }

    return result;
  }

  render() {
    // If error occurs, return a message.
    // XXX: Replace this with a UI component for 500 errors.
    if (this.state.error) {
      return <h3>An error occured while loading the page.</h3>;
    }

    // Waiting for async data to load
    if (!this.state.isLoaded) {
      return <Loader/>;
    }

    /**
     * XXX: Currently, the order of these fields MUST match the order of the
     * queried columns in _setupVariables() in dicom_archive.class.inc
     */
    const options = this.state.data.fieldOptions;
    const options2 = this.state.data.fieldOptions2;
    const fields = [
      {label: 'Patient ID', show: true},
      {label: 'Patient Name', show: true},
      {label: 'Sex', show: true},
      {label: 'Date of Birth', show: true},
      {label: 'Acquisition Date', show: true},
      {label: 'Archive Location', show: true},
      {label: 'Metadata', show: true},
      {label: 'MRI Browser', show: true},
      {label: 'Series UID', show: false},
      {label: 'Site', show: false},
      {label: 'TarchiveID', show: false},
      {label: 'SessionID', show: false},
      {label: 'Batch', show: true, filter: {
        name: 'ExportedBatch',
        type: 'select',
        options: options.batches,
      }},
      {label: 'StudyID', show: true, filter: {
        name: 'StudyID',
        type: 'select',
        options: options2.studyids,
      }},
    ];

    function myAjax() {
      a = $.ajax({
           type: 'POST',
           url: 'http://localhost:8088/produce_exports.php',
           data: {action: 'call_this'},
           success: function(html) {
             document.getElementById( 'stat' ).innerHTML = html.split( '<hr>')[1];
         },
      });
      return a;
    }

    function GoBatch() {
        b=myAjax();
    }

    return (
        <div id="container">
            <button onClick={GoBatch}>Export Batch</button>
            <label id="stat"></label>
          <FilterableDataTable
            name="dicom_filter"
            title='Dicom Archive'
            data={this.state.data.data}
            fields={fields}
            getFormattedCell={this.formatColumn}
          />
      </div>
    );
  }
}

DicomArchive.propTypes = {
  dataURL: PropTypes.string.isRequired,
};

window.addEventListener('load', () => {
  ReactDOM.render(
    <DicomArchive dataURL={loris.BaseURL + '/dicom_archive/?format=json'}/>,
    document.getElementById('lorisworkspace')
  );
});
