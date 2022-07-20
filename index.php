

<?php
    Echo "<button type="button" onclick="phpTest()">Pay</button>"
    function phpTest(){
        $url = "https://eftsecure.callpay.com/api/v1/payment-key";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Authorization: Basic eW9kYTp5b2RhMTIzNGFzZGY=",
        "Content-Type: application/x-www-form-urlencoded",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = "merchant_reference=ref&amount=10000.00";

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        var_dump($resp);
    }

?>
