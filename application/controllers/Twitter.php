<?php
    
    class Twitter extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            
      # load twitter config
           $this->load->config('twitter');
        }
        
        function login(){
      # include kan class twitter api
           include_once APPPATH.'libraries/twitteroauth/twitteroauth.php'; 
      
      # ambil customer key dan customer secret pada config file
           $consumer_key = $this->config->item('consumer_key');
            $consumer_secret = $this->config->item('consumer_secret');
            
      # buat objek untuk twitteroauth
           $oauth = new TwitterOAuth($consumer_key,$consumer_secret);
            
      # halaman callback untuk handle response dr twitter
           $callback = base_url() . 'twitter/callback';
            
      # request token
           $oauthRequest = $oauth->getRequestToken($callback);
            
      # simpan sementara data request token pada session
           $this->session->set_userdata("o_tok",$oauthRequest['oauth_token']);
            $this->session->set_userdata("o_tok_secret",$oauthRequest['oauth_token_secret']);
      
      # panggil halaman authorize twitter
           $registerUrl = $oauth->getAuthorizeURL($oauthRequest);
            
            redirect($registerUrl);
        }
        
        function callback(){
      # include kembali class twitter
           include_once APPPATH.'libraries/twitteroauth/twitteroauth.php'; 
      
      # include customer key dan customer secret twitter
           $consumer_key = $this->config->item('consumer_key');
            $consumer_secret = $this->config->item('consumer_secret');
      
      # ambil session dari token yang telah dibuat pada fungsi login
           $o_token = $this->session->userdata('o_tok');
            $o_token_secret = $this->session->userdata('o_tok_secret');

            # buat objek twitter oauth dengan customer key dan secret beserta token yang di dapat pada fungsi login
           $connection = new TwitterOAuth($consumer_key, $consumer_secret, $o_token, $o_token_secret);

            # dapatkan akses token dengan mengambil oauth_verifier
           $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
  
      # biasanya sy simpan data token, ID twitter, userid, screen name ke database
      # agar nanti tidak usah melakukan objek twitter kembali, tinggal panggil token yang tersimpan pada database
           $data_token = array(
                "twitter_id" => null,
                "o_token" => $access_token['oauth_token'],
                "o_token_secret" => $access_token['oauth_token_secret'],
                "user_id" => $access_token['user_id'],
                "screen_name" => $access_token['screen_name']
            );
            
            # berikut cara update status otomatis tanpa login
           $data = $connection->post('statuses/update', array('status' => "status dari twitter api")); */
      
      
      # lakukan proses penyimpanan data token, dll....
       }
    }

?>