<?php
/**
 * This file implements a data provisioner to get all possible rows
 * for the dicom archive menu page.
 *
 * PHP Version 7
 *
 * @category   Behavioural
 * @package    Main
 * @subpackage Imaging
 * @author     Dave MacFarlane <david.macfarlane2@mcgill.ca>
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt GPLv3
 * @link       https://www.github.com/aces/Loris/
 */

namespace LORIS\dicom_archive;

/**
 * This class implements a data provisioner to get all possible rows
 * for the dicom archive menu page.
 *
 * PHP Version 7
 *
 * @category   Behavioural
 * @package    Main
 * @subpackage Imaging
 * @author     Dave MacFarlane <david.macfarlane2@mcgill.ca>
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt GPLv3
 * @link       https://www.github.com/aces/Loris/
 */
class DicomArchiveRowProvisioner extends \LORIS\Data\Provisioners\DBRowProvisioner
{
    /**
     * Create a DicomArchiveRowProvisioner, which gets rows for the dicom_archive
     * menu table.
     */
    function __construct()
    {
        parent::__construct(
            "SELECT DISTINCT * FROM (SELECT t.PatientID as `Patient ID`,
            t.PatientName as `Patient Name`,
            t.PatientSex as Sex,
            t.PatientDoB as `Date of birth`,
            t.DateAcquired as Acquisition,
            t.ArchiveLocation as Archive_Location,
            'View Details' as Metadata,
            'View Images' as `MRI Browser`,
            (SELECT GROUP_CONCAT(SeriesUID) FROM tarchive_series e WHERE
                    e.TarchiveID=t.TarchiveID GROUP BY e.TarchiveID) as SeriesUID,
            s.CenterID as Site,
            t.TarchiveID as TarchiveID,
            s.ID as SessionID,
            s.CenterID,
            qf.ExportedBatch as ExportedBatch,
            f.FileStudyID as StudyID
            FROM tarchive t
                  LEFT JOIN session s ON (s.ID=t.SessionID)
                  LEFT JOIN candidate c ON (c.CandID=s.CandID)
                  LEFT JOIN files f ON (f.SessionID=t.SessionID)
                  LEFT JOIN files_qcstatus qf ON (f.FileID=qf.FileID)
            WHERE COALESCE(c.Active, 'Y')='Y' AND COALESCE(s.Active, 'Y')='Y') AS combined;",
            array()
        );
    }

    /**
     * Returns an instance of a DICOMArchiveRow object for a given
     * table row.
     *
     * @param array $row The database row from the LORIS Database class.
     *
     * @return \LORIS\Data\DataInstance An instance representing this row.
     */
    public function getInstance($row) : \LORIS\Data\DataInstance
    {
            $cid = $row['CenterID'];
            unset($row['CenterID']);
            return new DICOMArchiveRow($row, $cid);
    }
}
