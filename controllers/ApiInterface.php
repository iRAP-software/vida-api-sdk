<?php

/* 
 * This interface specifies the methods available to users of the ViDA SDK. It is implemented by
 * App.php and User.php
 */

namespace iRAP\VidaSDK\Controllers;

interface ApiInterface
{
    public function getUserToken($email, $password);
    
    public function requestUserPermissions($returnUrl);
    
    public function getUsers();
    
    public function addUser($name, $email, $password);
    
    public function updateUser($id, $name, $email, $password);
    
    public function replaceUser($id, $name, $email, $password);
    
    public function deleteUser($id);
    
    public function getDatasets();
    
    public function addDataset($name, $project_id, $manager_id);
    
    public function updateDataset($id, $name, $project_id, $manager_id);
    
    public function updateDatasetStatus($id, $status_id);
    
    public function replaceDataset($id, $name, $project_id, $manager_id);
    
    public function deleteDataset($id);
    
    public function getDatasetUsers($id);
    
    public function addDatasetUser($dataset_id, $user_id);
    
    public function deleteDatasetUser($dataset_id, $user_id);
    
    public function getDatasetsForProgramme($id);
    
    public function getDatasetsForRegion($id);
    
    public function getDatasetsForProject($id);
    
    public function getProgrammes();
    
    public function addProgramme($name, $manager_id);
    
    public function updateProgramme($id, $name, $manager_id);
    
    public function replaceProgramme($id, $name, $manager_id);
    
    public function deleteProgramme($id);
    
    public function getProgrammeUsers($id);
    
    public function addProgrammeUser($programme_id, $user_id);
    
    public function deleteProgrammeUser($programme_id, $user_id);
    
    public function getRegions();
    
    public function addRegion($name, $programme_id, $manager_id);
    
    public function updateRegion($id, $name, $programme_id, $manager_id);
    
    public function replaceRegion($id, $name, $programme_id, $manager_id);
    
    public function deleteRegion($id);
    
    public function getRegionUsers($id);
    
    public function addRegionUser($region_id, $user_id);
    
    public function deleteRegionUser($region_id, $user_id);
    
    public function getRegionsForProgramme($id);
    
    public function getProjects();
    
    public function addProject($name, $region_id, $manager_id, $model_id, $country_id);
        
    public function updateProject($id, $name, $region_id, $manager_id);
    
    public function replaceProject($id, $name, $region_id, $manager_id);
    
    public function deleteProject($id);
    
    public function getProjectUsers($id);
    
    public function addProjectUser($project_id, $user_id);
    
    public function deleteProjectUser($project_id, $user_id);
    
    public function getProjectsForProgramme($id);
    
    public function getProjectsForRegion($id);
    
    public function getVariables();
    
    public function updateVariable($id, $variables);
    
    public function replaceVariable($id, $variables);
    
    public function getVariablesForDataset($id);
    
    public function getRoadAttributes($id, $dataset_id);
    
    public function getRoadAttributesForProgramme($id);
    
    public function getRoadAttributesForRegion($id);
    
    public function getRoadAttributesForProject($id);
    
    public function getRoadAttributesForDataset($id);
    
    public function getLocations($id, $dataset_id, $filter = null);
    
    public function getLocationsForProgramme($id, $filter = null);
    
    public function getLocationsForRegion($id, $filter = null);
    
    public function getLocationsForProject($id, $filter = null);
    
    public function getLocationsForDataset($id, $filter = null);
    
    public function getFatalities($id, $dataset_id);
    
    public function getFatalitiesForProgramme($id);
    
    public function getFatalitiesForRegion($id);
    
    public function getFatalitiesForProject($id);
    
    public function getFatalitiesForDataset($id);
    
    public function getBeforeStarRatings($id, $dataset_id);
    
    public function getBeforeStarRatingsForProgramme($id);
    
    public function getBeforeStarRatingsForRegion($id);
    
    public function getBeforeStarRatingsForProject($id);
    
    public function getBeforeStarRatingsForDataset($id);
    
    public function getAfterStarRatings($id, $dataset_id);
    
    public function getAfterStarRatingsForProgramme($id);
    
    public function getAfterStarRatingsForRegion($id);
    
    public function getAfterStarRatingsForProject($id);
    
    public function getAfterStarRatingsForDataset($id);
    
    public function getData($id, $dataset_id);
    
    public function addData($datas, $dataset_id);
    
    public function updateData($id, $datas, $dataset_id);
    
    public function replaceData($id, $datas, $dataset_id);
    
    public function deleteData($id, $dataset_id);
    
    public function getDataForProgramme($id);
    
    public function getDataForRegion($id);
    
    public function getDataForProject($id);
    
    public function getDataForDataset($id);
    
    public function getCountries();
    
    public function getPermissions();
}