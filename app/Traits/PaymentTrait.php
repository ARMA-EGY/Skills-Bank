<?php

namespace App\Traits;


trait PaymentTrait
{

    public function PaymentLink($item, $customer)
    {       
        $token = $this->authenticat();
        dd($token);

        $order = $this->orderRegistration($item, $token);
        dd($order);

        $paymentKey = $this->paymentKey($item, $customer, $token, $order);        
        dd($paymentKey);

        return $paymentKey;

    }

    public function authenticat()
    {       
        $data = array(
            'api_key' => 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SndjbTltYVd4bFgzQnJJam94TVRJc0ltTnNZWE56SWpvaVRXVnlZMmhoYm5RaUxDSnVZVzFsSWpvaWFXNXBkR2xoYkNKOS5QelJEMWI1UlhlY2VCMVNhYVp4eEFaNm42a0tmbUV1R3IwZDcwaXpwVmNtdDN4OWtZNU1icG95Tlhkd2dkR2JCelU3Y2UtdnRpY1cwcjJMZ1ktWi1jZw==',
        );
        
        $endpoint = 'https://accept.paymob.com/api/auth/tokens';
        $method = 'POST';
        return $this->callApi($data,$endpoint,$method);

    }
    
    public function orderRegistration($item, $token)
    {  
        $items = array(
            'name' => $item->name,
            'amount_cents' => $item->price_eg,
            'description' => $item->description,
            'quantity' => 1,
        );
        


        $data = array(
            'auth_token' => $token,
            'delivery_needed' => "false",
            'amount_cents' => $item->price_eg,
            'currency' => "EGP",
            'items' => $items,

        );
        
        $endpoint = 'https://accept.paymob.com/api/ecommerce/orders';
        $method = 'POST';
        return $this->callApi($data,$endpoint,$method);

    }


    public function paymentKey($item, $customer, $token, $order)
    {  
        $billingData = array(
            "apartment" => "NA", 
            "email" => $customer->email, 
            "floor" => "NA", 
            "first_name" => $customer->name, 
            "street" => "NA", 
            "building" => "NA", 
            "phone_number" => $customer->phone_number, 
            "shipping_method" => "NA", 
            "postal_code" => "NA", 
            "city" => "NA", 
            "country" => "NA", 
            "last_name" => $customer->lastname, 
            "state" => "NA"
        );
        


        $data = array(
            "auth_token" => $token,
            "amount_cents" => $item->price_eg, 
            "expiration" => 3600, 
            "order_id" => $order,
            "billing_data" => $billingData, 
            "currency" => "EGP", 
            "integration_id" => 1

        );
        
        $endpoint = 'https://accept.paymob.com/api/ecommerce/orders';
        $method = 'POST';
        return $this->callApi($data,$endpoint,$method);

    }    



    public function callApi($data,$endpoint,$method)
    {
        $data_string = json_encode($data);
        $ch = curl_init($endpoint);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Accepts: application/json',
                'Content-Type: application/json'
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
