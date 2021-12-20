<?php

namespace App\Traits;


trait MeetingTrait
{

    public function create_meeting($topic, $start_time)
    {       
        $data = array(
            'topic' => $topic,
            'type'  => 3,
            'start_time'  => $start_time,

            'schedule_for'  => "youssef97hesham@gmail.com",
            'timezone'  => "Africa/Cairo",

            'settings' =>['host_video' => false,'participant_video' => false,'mute_upon_entry' => false,'watermark' => false,'use_pmi' => false],
            'registrants_email_notification'  => false,

        );
      
        $endpoint = 'users/youssef97hesham@gmail.com/meetings';
        $method = 'POST';
        return $this->callApi($data,$endpoint,$method);

    }


    
    public function delete_meeting($meetingId)
    {       
        $data = array(
        );
        
        $endpoint = '/meetings/'.$meetingId;
        $method = 'DELETE';
        return $this->callApi($data,$endpoint,$method);

    }



    public function callApi($data,$endpoint,$method)
    {
        $data_string = json_encode($data);
        $ch = curl_init('https://api.zoom.us/v2/'.$endpoint);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Accepts: application/json',
                'Content-Type: application/json',
                'Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IkFDdzRZOGdZU2tHMlhfcjU5YVVSSGciLCJleHAiOjE2NDA0OTE2NDgsImlhdCI6MTYzOTg4Njg0OX0.8cbmoZWeCbh_ddcDyBkMiAEQuC1RJl-vARc8K3amfmg'
            )
        );

        $response = curl_exec($ch);
        $err = curl_error($ch);

        curl_close($ch);

        if ($err) {
            $data = ['message' => 'failure', 'data' =>json_decode($err) ];
            return  $data;
        }

        $data = ['message' => 'success', 'data' =>json_decode($response) ];
        return  $data;
    }

    
  


}
