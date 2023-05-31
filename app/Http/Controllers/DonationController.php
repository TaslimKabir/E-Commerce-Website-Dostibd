<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
 
  
    public function recDonation(Request $request)
    {
        Donation :: createDonationdetail ($request);
        return redirect('/category/donate');
    }

    public function manageDonation()
    {
        $donation = new Donation();
        return view('backend.admin.donation.manageDonation',['donations'=>$donation->all()]);
    }
    public function delete($id)
    {
        $donation = Donation :: deleteDonation($id);
        return redirect('/donation/manageDonation');
      
    }
    public function editDonation($id)
    {
        $donation = Donation::find($id);
        return view('backend.admin.donation.editDonation',['donation'=>$donation]);
      
    }
    public function UpdateDonation( Request $request, $id)
    {
       Donation:: editDonation($request, $id);
       return redirect('/donation/manageDonation');
    
    }


    
}
