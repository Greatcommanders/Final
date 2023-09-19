<?php

require_once(ROOT_PATH.'/core/controller.php');
require_once(ROOT_PATH.'/models/requestModel.php');
require_once(ROOT_PATH.'/models/ethicModel.php');
require_once(ROOT_PATH.'/models/applicationModel.php');
require_once(ROOT_PATH.'/models/requestEthicModel.php');
require_once(ROOT_PATH.'/models/requestResearchModel.php');

class HomeController extends Controller
{

    public function index()
    {
        $data = array();
        $this->load_view('dashboard', $data);
    }
    public function admin()
    {
        $data = array();
        $this->load_view('admin', $data);
    }

    public function forms()
    {
        $data = array();
        $this->load_view('forms', $data);
    }
    public function first()
    {
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['Submit']))
        {
            $request = array(
                'user_id'=>$_SESSION['userId'],
                'request_date'=>date('Y-m-d'),
                'request_type_id'=>2,
                'request_status_id'=>1
            );
            $res = RequestModel::create($request);
            if(!$res){
                echo "<script type='text/javascript'> alert('Failed to submit the request')</script>";
                exit;
            }
            $requestId = RequestModel::latest()->first()['id'];

            $application = array(
                'request_id'=>$requestId,
                'study_title'=>$_POST['study_title'],
                'study_type'=>$_POST['study_type'],
                'researcher_full_name_1'=>$_POST['researcher_full_name_1'],
                'researcher_email_1'=>$_POST['researcher_email_1'],
                'researcher_department_1'=>$_POST['researcher_department_1'],
                'researcher_institute_1'=>$_POST['researcher_institute_1'],
                'researcher_address_1'=>$_POST['researcher_address_1'],
                'researcher_phone_1'=>$_POST['researcher_phone_1'],
                'researcher_full_name_2'=>$_POST['researcher_full_name_2'],
                'researcher_institute_2'=>$_POST['researcher_institute_2'],
                'supervisor_full_name'=>$_POST['supervisor_full_name'],
                'supervisor_email'=>$_POST['supervisor_email'],
                'supervisor_department'=>$_POST['supervisor_department'],
                //'supervisor_institute'=>$_POST['supervisor_institute'],
                'supervisor_address'=>$_POST['supervisor_address'],
                'supervisor_phone'=>$_POST['supervisor_phone'],
                'data_collection_institution_1'=>$_POST['data_collection_institution_1'],
                'data_collection_institution_2'=>$_POST['data_collection_institution_2'],
                'other_institution'=>$_POST['other_institution'],
                'expected_start_date'=>$_POST['expected_start_date'],
                'expected_end_date'=>$_POST['expected_end_date'],
                'data_collection'=>$_POST['approval'],
                'study_support'=>$_POST['study_support'],
                'funding_institution'=>$_POST['funding'],
                'other_funding_institution'=>$_POST['other_institution'],
                'application_status'=>$_POST['status'],
                'protocol_number'=>$_POST['protocolNumber'],
                'new_expected_completed_date'=>$_POST['expectedDate'],
                'reporting_changes_protocol_number'=>$_POST['reporting_changes_protocol_number'],
                //'changes_description'=>$_POST[''],
                'unexpected_situations'=>$_POST['unexpected_situations'],
                'study_purpose'=>$_POST['study_purpose'],
                'collection_methods'=>$_POST['collection_methods'],
                'study_secrecy'=>$_POST['secrecy'],
                'negative_effects'=>$_POST['negative_effects'],
                'number_of_participants'=>$_POST['number_of_participants'],
                'control_group'=>$_POST['studentStatus'],
                //'study_participants'=>$_POST[''],
                'children_verbal_consent'=>$_POST['studentStatus'],
                'pupils_verbal_consent'=>$_POST['schoolLevel'],
                'other_study_participants'=>$_POST['other_study_participants'],
                'participation_condition'=>$_POST['participation_condition'],
                'participation_invitation'=>$_POST['participation_invitation'],
                'used_methods'=>$_POST['used_methods'],
                'work_contributions'=>$_POST['work_contributions'],
                'supervisor'=>$_POST['supervisor'],
                'researcher'=>$_POST['researcher'],
            );

            $res = ApplicationModel::create($application);
            if(!$res){
                echo "<script type='text/javascript'> alert('Failed to submit the request')</script>";
                exit;
            }
            else{
                echo "<script type='text/javascript'> alert('Form Submitted succesfully')</script>";
                RequestResearchModel::create([
                    'request_id'=>$requestId,
                    'research_id'=>ApplicationModel::latest()->first()['id']
                ]);
                header('Location: /applications');
            }
        }
        $data = array();
        $this->load_view('first', $data);
    }

    public function second()
    {
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['Submit']))
        {
            $request = array(
                'user_id'=>$_SESSION['userId'],
                'request_date'=>date('Y-m-d'),
                'request_type_id'=>1,
                'request_status_id'=>1
            );
            $res = RequestModel::create($request);
            if(!$res){
                echo "<script type='text/javascript'> alert('Failed to submit the request')</script>";
                exit;
            }
            $requestId = RequestModel::latest()->first()['id'];
            $ethic = array(
                'study_description'=>$_POST['study_description'],
                'data_collection'=>$_POST['data_collection'],
                'expected_result'=>$_POST['expected_results'],
                'procedures'=>$_POST['procedures'],
                'aim_of_the_study'=>$_POST['aim_of_the_study'],
                'potential_contributions'=>$_POST['potential_contributions'],
                'previous_research_projects'=>$_POST['previous_research_project'],
                'user_id'=>$_SESSION['userId'],
                'request_id'=>$requestId,
                'researcher'=>$_POST['researcher'],
                'supervisor'=>$_POST['supervisor']
            );
            $res = EthicModel::create($ethic);
            if(!$res){
                echo "<script type='text/javascript'> alert('Failed to submit the request')</script>";
                exit;
            }
            else{
                echo "<script type='text/javascript'> alert('Form Submitted succesfully')</script>";
                RequestEthicModel::create([
                    'request_id'=>$requestId,
                    'ethic_id'=> EthicModel::latest()->first()['id']
                ]);
                header('Location: /applications');
            }
        }
        $data = array();
        $this->load_view('second', $data);
    }

    public function applications()
    {

        $applications = RequestModel::all();
        foreach($applications as &$application)
        {
            $application['request_number'] = $application['id'];
            $application['comment'] = $application['request_comment'];
            $application['status'] = 'new';
            if($application['request_status_id']==1)
            {
                $application['status'] = 'new';
            }
            else if($application['request_status_id']==3)
            {
                $application['status'] = 'approved';
            }
            if($application['request_type_id']==1)
            {
                $application['type'] = 'Ethics';
            }
            else if($application['request_type_id']==2)
            {
                $application['type'] = 'Project';
            }
        }
        $this->load_view('applications', $applications);
    }

    
}