<?php

require_once(ROOT_PATH.'/core/controller.php');
require_once(ROOT_PATH.'/models/requestModel.php');
require_once(ROOT_PATH.'/models/ethicModel.php');
require_once(ROOT_PATH.'/models/applicationModel.php');
require_once(ROOT_PATH.'/models/requestEthicModel.php');
require_once(ROOT_PATH.'/models/requestResearchModel.php');
class ApplicationController extends Controller
{
    public function viewAll()
    {
        $applications = EthicModel::where(['user_id'=>$_SESSION['userId']])->get();
        foreach($applications as &$application)
        {
            $request = RequestModel::where(['id'=>$application['request_id']])->first();
            $application['request_number'] = $request['id'];
            $application['comment'] = $request['request_comment'];
            $application['status'] = 'new';
            $application['type'] = 'Ethics';
        }
        print_r(json_encode($applications));
        //return json_encode($applications);
    }
    public function first_form($id)
    {
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['Submit']))
        {
            if($_SESSION['user_type']=='admin')
            {
                $status = $_POST['application_status'];
                if($status == 'approved')
                {
                    $app = ApplicationModel::where(['id'=>$id])->first();
                    $req = RequestModel::where(['id'=>$app['request_id']])->update(['request_status_id'=>3,'request_comment'=>$_POST['request_comment']]);
                    if(!$req)
                    {
                        echo "<script type='text/javascript'> alert('Failed to set the application status')</script>";
                        exit;
                    }
                    else
                    {
                        echo "<script type='text/javascript'> alert('Success: Application Status updated')</script>";
                        header('Location: /admin');
                    }

                }
                else if($status == 'denied')
                {
                    $app = ApplicationModel::where(['id'=>$id])->first();
                    $req = RequestModel::where(['id'=>$app['request_id']])->update(['request_status_id'=>4,'request_comment'=>$_POST['request_comment']]);
                    if(!$req)
                    {
                        echo "<script type='text/javascript'> alert('Failed to set the application status')</script>";
                        exit;
                    }
                    else
                    {
                        echo "<script type='text/javascript'> alert('Success: Application Status updated')</script>";
                        header('Location: /admin');
                    }
                }
                else if($status == 'revised')
                {
                    $app = ApplicationModel::where(['id'=>$id])->first();
                    $req = RequestModel::where(['id'=>$app['request_id']])->update(['request_status_id'=>2,'request_comment'=>$_POST['request_comment']]);
                    if(!$req)
                    {
                        echo "<script type='text/javascript'> alert('Failed to set the application status')</script>";
                        exit;
                    }
                    else
                    {
                        echo "<script type='text/javascript'> alert('Success: Application Status updated')</script>";
                        header('Location: /admin');
                    }
                }
            }
            else if($_SESSION['user_type']=='normal')
            {

                $application = array(
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
                    //'supervisor_full_name'=>$_POST['supervisor_full_name'],
                    //'supervisor_email'=>$_POST['supervisor_email'],
                    //'supervisor_department'=>$_POST['supervisor_department'],
                    //'supervisor_institute'=>$_POST['supervisor_institute'],
                    //'supervisor_address'=>$_POST['supervisor_address'],
                    //'supervisor_phone'=>$_POST['supervisor_phone'],
                    'data_collection_institution_1'=>$_POST['data_collection_institution_1'],
                    'data_collection_institution_2'=>$_POST['data_collection_institution_2'],
                    'other_institution'=>$_POST['other_institution'],
                    'expected_start_date'=>$_POST['expected_start_date'],
                    'expected_end_date'=>$_POST['expected_end_date'],
                    //'data_collection'=>$_POST['approval'],
                    'study_support'=>$_POST['study_support'],
                    'funding_institution'=>$_POST['funding'],
                    'other_funding_institution'=>$_POST['other_institution'],
                    'ethical_approval'=>$_POST['ethical_approval'],
                    'application_status'=>$_POST['status'],
                    'protocol_number'=>$_POST['protocolNumber'],
                    'new_expected_completed_date'=>$_POST['expectedDate'],
                    'reporting_changes'=>$_POST['changes'],
                    'reporting_changes_protocol_number'=>$_POST['reporting_changes_protocol_number'],
                    //'changes_description'=>$_POST[''],
                    'unexpected_situations'=>$_POST['unexpected_situations'],
                    'study_purpose'=>$_POST['study_purpose'],
                    'collection_methods'=>$_POST['collection_methods'],
                    'study_secrecy'=>$_POST['secrecy'],
                    'approval'=>$_POST['approval'],
                    'negative_effects'=>$_POST['negative_effects'],
                    'number_of_participants'=>$_POST['number_of_participants'],
                    'control_group'=>$_POST['studentStatus'],
                    'study_participants'=>$_POST['schoolLevel'],
                    'children_verbal_consent'=>$_POST['children_verbal_consent'],
                    'pupils_verbal_consent'=>$_POST['pupils_verbal_consent'],
                    'consent'=>$_POST['consent'],
                    'other_study_participants'=>$_POST['other_study_participants'],
                    'participation_condition'=>$_POST['participation_condition'],
                    'participation_invitation'=>$_POST['participation_invitation'],
                    'used_methods'=>$_POST['used_methods'],
                    'other_used_methods'=>$_POST['other_used_methods'],
                    'work_contributions'=>$_POST['work_contributions'],
                    'supervisor'=>$_POST['supervisor'],
                    'researcher'=>$_POST['researcher'],
                );

                $res = ApplicationModel::where(['id'=>$id])->update($application);
                if(!$res){
                    echo "<script type='text/javascript'> alert('Failed to Edit the application!')</script>";
                    header('Location: /applications');
                    exit;
                }
                else{
                    echo "<script type='text/javascript'> alert('Application edited the application!')</script>";
                    header('Location: /applications');
                }
            }
            
        }
        $appId = $id;
        $data = array(
            'appId'=>$appId
        );
        return $this->load_view('admin_first',$data);
    }
    public function second_form($id)
    {
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['Submit']))
        {
            if($_SESSION['user_type']=='admin')
            {
                $status = $_POST['application_status'];
                if($status == 'approved')
                {
                    $app = EthicModel::where(['id'=>$id])->first();
                    $req = RequestModel::where(['id'=>$app['request_id']])->update(['request_status_id'=>3,'request_comment'=>$_POST['request_comment']]);
                    if(!$req)
                    {
                        echo "<script type='text/javascript'> alert('Failed to set the application status')</script>";
                        exit;
                    }
                    else
                    {
                        echo "<script type='text/javascript'> alert('Success: Application Status updated')</script>";
                        header('Location: /admin');
                    }

                }
                else if($status == 'denied')
                {
                    $app = EthicModel::where(['id'=>$id])->first();
                    $req = RequestModel::where(['id'=>$app['request_id']])->update(['request_status_id'=>4,'request_comment'=>$_POST['request_comment']]);
                    if(!$req)
                    {
                        echo "<script type='text/javascript'> alert('Failed to set the application status')</script>";
                        exit;
                    }
                    else
                    {
                        echo "<script type='text/javascript'> alert('Success: Application Status updated')</script>";
                        header('Location: /admin');
                    }
                }
                else if($status == 'revised')
                {
                    $app = EthicModel::where(['id'=>$id])->first();
                    $req = RequestModel::where(['id'=>$app['request_id']])->update(['request_status_id'=>2,'request_comment'=>$_POST['request_comment']]);
                    if(!$req)
                    {
                        echo "<script type='text/javascript'> alert('Failed to set the application status')</script>";
                        exit;
                    }
                    else
                    {
                        echo "<script type='text/javascript'> alert('Success: Application Status updated')</script>";
                        header('Location: /admin');
                    }
                }
            }
            else if($_SESSION['user_type']=='normal')
            {
                $requestId = $id;
                $ethic = array(
                    'study_description'=>$_POST['study_description'],
                    'data_collection'=>$_POST['data_collection'],
                    'expected_result'=>$_POST['expected_result'],
                    'procedures'=>$_POST['procedures'],
                    'aim_of_the_study'=>$_POST['aim_of_the_study'],
                    'potential_contributions'=>$_POST['potential_contributions'],
                    'previous_research_projects'=>$_POST['previous_research_project'],
                    'user_id'=>$_SESSION['userId'],
                    'researcher'=>$_POST['researcher'],
                    'supervisor'=>$_POST['supervisor']
                );
                $res = EthicModel::where(['id'=>$id])->update($ethic);
                if(!$res){
                    echo "<script type='text/javascript'> alert('Failed to Edit the application')</script>";
                    header('Location: /applications');
                    exit;
                }
                else{
                    echo "<script type='text/javascript'> alert('Application Updated succesafully!')</script>"; 
                    header('Location: /applications');
                }
            }    
        }
        $appId = $id;
        $data = array(
            'appId'=>$appId
        );
        return $this->load_view('admin_second',$data);
    }

    public function ethicDelete($id)
    {
        $del= RequestEthicModel::where(['request_id'=>$id])->delete();
        $delEthic = EthicModel::where(['request_id'=>$id])->delete();
        $delRequest= RequestModel::where(['id'=>$id])->delete();
        
        //echo '1:'.$delEthic.' 2:'.$delRequest.' 3:'.$del;
        
        if(!($delRequest && $delEthic && $del))
        {
            echo "<script type='text/javascript'> alert('Failed to delete the application')</script>";
            header('Location: /applications');
        }
        else{
            echo "<script type='text/javascript'> alert('Application deleted succesfully')</script>";  
            header('Location: /applications');
        }
    }

    public function projectDelete($id)
    {
        $del= RequestResearchModel::where(['request_id'=>$id])->delete();
        $delProject = ApplicationModel::where(['request_id'=>$id])->delete();
        $delRequest= RequestModel::where(['id'=>$id])->delete();
        if(!($delRequest && $delProject && $del))
        {
            echo "<script type='text/javascript'> alert('Failed to delete the application')</script>";
            header('Location: /applications');
        }
        else{
            echo "<script type='text/javascript'> alert('Application deleted succesfully')</script>";  
            header('Location: /applications');
        }
    }
}