<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Payments extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/payment_model');
        $this->isLoggedIn();   
        $this->load->helper('url');
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->payment_model->userPaymentListingCount($searchText);

			$returns = $this->paginationCompress ( "paymentListing/", $count, 20 );
            
            $data['userRecords'] = $this->payment_model->userPaymentListing($searchText, $returns["page"], $returns["segment"]);
     
            $this->global['pageTitle'] = 'CodeInsect : Payments';
            
            $this->loadViews("admin/paymentList", $this->global, $data , NULL);
    }
}

}
    