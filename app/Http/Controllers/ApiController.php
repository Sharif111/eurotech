<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Deposit;
use App\Payment;
use App\User;
use DB;

class ApiController extends Controller
{
    public function addCustomer(Request $r){
        $openDate = $r->opening_date;
        $acNo = $r->ac_no;
        $custName = $r->cust_name;
        $nomineeName = $r->nominee_name;
        $address = $r->full_address;
        $mobile_no = $r->mobile_no;
        $week = $r->week;
        $market = $r->market;
        $docType = $r->doc_type;
        $docNo = $r->doc_no;
        $custAge = $r->cust_age;
        $nomineeAge = $r->nominee_age;
        $relation = $r->relation;

        if($openDate == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Opening Date',
            ]);
        }
        elseif($acNo == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Account No.',
            ]);
        }
        elseif($custName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Customer Name',
            ]);
        }
        elseif($nomineeName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Nominee Name',
            ]);
        }
        elseif($address == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Address',
            ]);
        }
        elseif($mobile_no == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Mobile No.',
            ]);
        }
        elseif($nomineeName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Nominee Name',
            ]);
        }
        elseif($week == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Week',
            ]);
        }
        elseif($market == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Market',
            ]);
        }
        elseif($docType == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Doctype',
            ]);
        }
        elseif($docNo == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Doc No.',
            ]);
        }
        elseif($custAge == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Customer Age',
            ]);
        }
        elseif($nomineeAge == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Nominee Age',
            ]);
        }
        elseif($relation == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Relation',
            ]);
        }

        // return Date('Y-m-d',strtotime($r->opening_date));
        if(Customer::where('ac_no',$r->ac_no)->exists()){
            return response()->json([
                'code'=>0,
                'reason'=>'Data Already Exist!',
            ]);
        }
        else{
            $data['opening_date'] = Date('Y-m-d',strtotime($r->opening_date));
            $data['ac_no'] =  $r->ac_no;
            $data['name'] = $r->cust_name;
            $data['nominee_name'] = $r->nominee_name;
            $data['full_address'] = $r->full_address;
            $data['mobile_no'] = $r->mobile_no;
            $data['week'] = $r->week;
            $data['market'] = ucwords(strtolower($r->market));
            $data['doc_type'] = $r->doc_type;
            $data['doc_no'] = $r->doc_no;
            $data['age'] = $r->cust_age;
            $data['nominee_age'] = $r->nominee_age;
            $data['relation'] = $r->relation;
            $imageName = 'demo_user.jpg';

            if($r->has('img')){
                $image = $r->img;  // your base64 encoded
                $image = str_replace('data:image/jpeg;base64,', '', $image);
                $b64 = str_replace(' ', '+', $image);
                //return $b64;
                $bin = base64_decode($b64);

                // Gather information about the image using the GD library
                $size = getImageSizeFromString($bin);

                // Check the MIME type to be sure that the binary data is an image
                if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
                  die('Base64 value is not a valid image');
                }

                // Mime types are represented as image/gif, image/png, image/jpeg, and so on
                // Therefore, to extract the image extension, we subtract everything after the “image/” prefix
                $ext = substr($size['mime'], 6);

                // Make sure that you save only the desired file extensions
                if(!in_array($ext, ['png', 'gif', 'jpeg', 'jpg'])) {
                  die('Unsupported image type');
                }
                $imageName = "c_".time().".{$ext}";
                // Specify the location where you want to save the image
                $img_file = public_path()."/admin/images/customers/".$imageName;

                // Save binary data as raw data (that is, it will not remove metadata or invalid contents)
                // In this case, the PHP backdoor will be stored on the server
                file_put_contents($img_file, $bin);

            }
            
            $data['photo'] = $imageName;

            $isStore = Customer::create($data);
            if($isStore){
                return response()->json([
                    'code'=>1,
                    'reason'=>'Data Inserted Successfully',
                ]);
            }
            else{
                return response()->json([
                    'code'=>0,
                    'reason'=>'Data Insert Failed!',
                ]);
            }
        }
    }

    public function CustomerList(){
        $customerList = Customer::orderby('id','desc')->get();
        foreach($customerList as $i=>$custData){
            $customerList[$i]['photo'] = url('/')."/public/admin/images/customers/".$custData->photo;
        }
        return $customerList;
    }
    public function GetCustomerInfo(Request $r){
        $id = $r->id;
        if($id == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Account ID',
            ]);
        }
        $custData = Customer::where('ac_no',$id)->orderby('id','desc')->first();
        if($custData){
            $custData['code'] = 1;
            $custData['photo'] = url('/')."/public/admin/images/customers/".$custData['photo'];
            return $custData;
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Customer Not Found',
            ]);
        }
    }

    public function EditCustomer(Request $r){
        $id = $r->id;
        $openDate = $r->opening_date;
        $acNo = $r->ac_no;
        $custName = $r->cust_name;
        $nomineeName = $r->nominee_name;
        $address = $r->full_address;
        $mobile_no = $r->mobile_no;
        $week = $r->week;
        $market = $r->market;
        $docType = $r->doc_type;
        $docNo = $r->doc_no;
        $custAge = $r->cust_age;
        $nomineeAge = $r->nominee_age;
        $relation = $r->relation;

        if($id == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Edit ID',
            ]);
        }
        $isData = Customer::select('id')->find($id);
        if(!$isData){
            return response()->json([
                'code'=>0,
                'reason'=>'Customer Not Found',
            ]);
        }
        
        if($openDate == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Opening Date',
            ]);
        }
        elseif($acNo == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Account No.',
            ]);
        }
        elseif($custName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Customer Name',
            ]);
        }
        elseif($nomineeName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Nominee Name',
            ]);
        }
        elseif($address == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Address',
            ]);
        }
        elseif($mobile_no == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Mobile No.',
            ]);
        }
        elseif($nomineeName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Nominee Name',
            ]);
        }
        elseif($week == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Week',
            ]);
        }
        elseif($market == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Market',
            ]);
        }
        elseif($docType == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Doctype',
            ]);
        }
        elseif($docNo == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Doc No.',
            ]);
        }
        elseif($custAge == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Customer Age',
            ]);
        }
        elseif($nomineeAge == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Nominee Age',
            ]);
        }
        elseif($relation == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Relation',
            ]);
        }
        

        
        $data['opening_date'] = Date('Y-m-d',strtotime($r->opening_date));
        $data['ac_no'] =  $r->ac_no;
        $data['name'] = $r->cust_name;
        $data['nominee_name'] = $r->nominee_name;
        $data['full_address'] = $r->full_address;
        $data['mobile_no'] = $r->mobile_no;
        $data['week'] = $r->week;
        $data['market'] = ucwords(strtolower($r->market));
        $data['doc_type'] = $r->doc_type;
        $data['doc_no'] = $r->doc_no;
        $data['age'] = $r->cust_age;
        $data['nominee_age'] = $r->nominee_age;
        $data['relation'] = $r->relation;
        $imageName = 'demo_user.jpg';
        if($r->has('img')){
            $image = $r->img;  // your base64 encoded
            $image = str_replace('data:image/jpeg;base64,', '', $image);
            $b64 = str_replace(' ', '+', $image);
            //return $b64;
            $bin = base64_decode($b64);

            // Gather information about the image using the GD library
            $size = getImageSizeFromString($bin);

            // Check the MIME type to be sure that the binary data is an image
            if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
              die('Base64 value is not a valid image');
            }

            // Mime types are represented as image/gif, image/png, image/jpeg, and so on
            // Therefore, to extract the image extension, we subtract everything after the “image/” prefix
            $ext = substr($size['mime'], 6);

            // Make sure that you save only the desired file extensions
            if(!in_array($ext, ['png', 'gif', 'jpeg', 'jpg'])) {
              die('Unsupported image type');
            }

            // Specify the location where you want to save the image
            $img_file = public_path()."/admin/images/customers/c_".time().".{$ext}";

            // Save binary data as raw data (that is, it will not remove metadata or invalid contents)
            // In this case, the PHP backdoor will be stored on the server
            file_put_contents($img_file, $bin);
            $imageName = $img_file;

        }
        $data['photo'] = $imageName;
        $isUpdate = Customer::find($id)->update($data);
        if($isUpdate){
            return response()->json([
                'code'=>1,
                'reason'=>'Data Updated Successfully',
            ]);
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Data Update Failed!',
            ]);
        }
        
    }

    public function DestroyCustomer(Request $r){
        $id = $r->id;
        if($id == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid ID',
            ]);
        }
        $CustData = Customer::select('id','ac_no')->find($id);
        if($CustData){
            DB::beginTransaction();
            try{
                Customer::find($id)->delete();
                Payment::where('ac_no',$CustData['ac_no'])->delete();
                Deposit::where('ac_no',$CustData['ac_no'])->delete();
                DB::commit();
                return response()->json([
                    'code'=>1,
                    'reason'=>'Data Deleted Successfully',
                ]);
            }
            catch(\Exception $e) {
                DB::rollback();
                return response()->json([
                    'code'=>0,
                    'reason'=>'Data Delete Failed!',
                ]);
            }
            
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Customer Not Found',
            ]);
        }
    }


    /// Deposit ///////////////////////////////////////
// ***************************************************************************************************************
    
    public function addDeposit(Request $request){
        if($request->ac_no == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Account No.',
            ]);
        }
        elseif($request->payment_date == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid  Date',
            ]);
        }
        elseif($request->payment_amount == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid  Amount',
            ]);
        }
        elseif($request->description == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Type',
            ]);
        }


        if($request->send_sms == ''){
            $sms = 0;
        }else{
            $sms = 1;
        }
        $time = Date('H:i:s');
        $payDate = Date("Y-m-d $time",strtotime($request->payment_date));
        $custData = Customer::select('id','previous_balance')->where('ac_no','=',$request->ac_no)->orderby('id','desc')->first();
        if(!$custData){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid A/C No. Please try again. Thank you.',
            ]);
        }
        $isStore = Deposit::create([
            'ac_no'=>$request->ac_no,
            'deposit_amount'=>$request->payment_amount,
            'description'=>$request->description,
            'deposit_date'=>$payDate,
            'send_sms'=>$sms,
        ]);
        $newBalance = $custData['previous_balance']+$request->payment_amount;
        $isUpdate = Customer::find($custData['id'])->update([
            'previous_balance'=>$newBalance,
        ]);
        if($isUpdate){
            return response()->json([
                'code'=>1,
                'reason'=>'Deposit Inserted Successfully',
            ]);
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Deposit Insert Failed!',
            ]);
        }
    }
    public function DepositList(Request $r){
        return DB::table('deposits')
                    ->join('customers', 'deposits.ac_no', '=', 'customers.ac_no')
                    ->orderby('deposits.id','desc')
                    ->select('deposits.*', 'customers.nominee_name')
                    ->get();
    }

    public function GetDeposit(Request $r){
        $id = $r->id;
        if($id == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid ID',
            ]);
        }
        $deposit_edit = Deposit::find($id);
        if($deposit_edit){
            $deposit_edit['code'] = 1;
            return $deposit_edit;
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Data Not Found',
            ]);
        }
    }

    public function EditDeposit(Request $request){
        $id = $request->id;
        if($id == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid ID',
            ]);
        }
        $oldAmount = Deposit::select('deposit_amount')->find($id);
        if(!$oldAmount){
            return response()->json([
                'code'=>0,
                'reason'=>'Data Not Found',
            ]);
        }

        if($request->ac_no == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Account No.',
            ]);
        }
        elseif($request->payment_date == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid  Date',
            ]);
        }
        elseif($request->payment_amount == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid  Amount',
            ]);
        }
        elseif($request->description == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Type',
            ]);
        }

        if($request->send_sms == ''){
            $sms = 0;
        }else{
            $sms = 2;
        }
        $time = Date('H:i:s');
        $payDate = Date("Y-m-d $time",strtotime($request->payment_date));
        $isUpdate = Deposit::find($id)->update([
            'ac_no'=>$request->ac_no,
            'deposit_amount'=>$request->payment_amount,
            'description'=>$request->description,
            'deposit_date'=>$payDate,
            'send_sms'=>$sms,
        ]);
        $custData = Customer::select('id','previous_balance')->where('ac_no',$request->ac_no)->orderby('id','desc')->first();
        $balanceCor = $request->payment_amount;
        if($oldAmount['deposit_amount'] >= $request->payment_amount){
            $balanceCor = $oldAmount['deposit_amount']-$request->payment_amount;
            $custBlnc = $custData['previous_balance']-$balanceCor;
            Customer::find($custData['id'])->update(['previous_balance'=>$custBlnc]);
        }
        else{
            $balanceCor = $request->payment_amount-$oldAmount['deposit_amount'];
            $custBlnc = $custData['previous_balance']+$balanceCor;
            Customer::find($custData['id'])->update(['previous_balance'=>$custBlnc]);
        }

        if($isUpdate){
            return response()->json([
                'code'=>1,
                'reason'=>'Deposit Updated Successfully',
            ]);
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Deposit Update Failed!',
            ]);
        }
    }


    public function DestroyDeposit(Request $r){
        $id = $r->id;
        if($id == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid ID',
            ]);
        }
        $PayData = Deposit::find($id);
        if($PayData){
            $isDelete = Deposit::find($PayData['id'])->delete();
            if($isDelete){
                $CustData = Customer::select('id','previous_balance')->where('ac_no',$PayData['ac_no'])->orderby('id','desc')->first();
                $newBalance = $CustData['previous_balance']-$PayData['deposit_amount'];
                $isUpdate = Customer::find($CustData['id'])->update(['previous_balance'=>$newBalance]);
                return response()->json([
                    'code'=>1,
                    'reason'=>'Data Deleted Successfully',
                ]);
            }
            else{
                return response()->json([
                    'code'=>0,
                    'reason'=>'Data Delete Failed!',
                ]);
            }
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Data Not Found',
            ]);
        }
    }

// *************************************************************************************************
// ********************************** Payment **************************************************

    
public function addPayment(Request $request){
    if($request->ac_no == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid Account No.',
        ]);
    }
    elseif($request->payment_date == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid  Date',
        ]);
    }
    elseif($request->payment_amount == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid  Amount',
        ]);
    }
    elseif($request->description == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid Description',
        ]);
    }


    if($request->send_sms == ''){
        $sms = 0;
    }else{
        $sms = 1;
    }
    $time = Date('H:i:s');
    $payDate = Date("Y-m-d $time",strtotime($request->payment_date));
    $custData = Customer::select('id','previous_balance')->where('ac_no','=',$request->ac_no)->orderby('id','desc')->first();
    if(!$custData){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid A/C No. Please try again. Thank you.',
        ]);
    }
    $isStore = Payment::create([
        'ac_no'=>$request->ac_no,
        'pay_amount'=>$request->payment_amount,
        'description'=>$request->description,
        'pay_date'=>$payDate,
        'send_sms'=>$sms,
    ]);
    $newBalance = $custData['previous_balance']-$request->payment_amount;
    $isUpdate = Customer::find($custData['id'])->update([
        'previous_balance'=>$newBalance,
    ]);
    if($isUpdate){
        return response()->json([
            'code'=>1,
            'reason'=>'Payment Inserted Successfully',
        ]);
    }
    else{
        return response()->json([
            'code'=>0,
            'reason'=>'Payment Insert Failed!',
        ]);
    }
}

public function PaymentList(Request $r){
    return DB::table('payments')
                ->join('customers', 'payments.ac_no', '=', 'customers.ac_no')
                ->orderby('payments.id','desc')
                ->select('payments.*', 'customers.nominee_name')
                ->get();
}

public function GetPayment(Request $r){
    $id = $r->id;
    if($id == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid ID',
        ]);
    }
    $deposit_edit = Payment::find($id);
    if($deposit_edit){
        $deposit_edit['code'] = 1;
        return $deposit_edit;
    }
    else{
        return response()->json([
            'code'=>0,
            'reason'=>'Data Not Found',
        ]);
    }
}

public function EditPayment(Request $request){
    $id = $request->id;
    if($id == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid ID',
        ]);
    }
    $oldAmount = Payment::select('pay_amount')->find($id);
    if(!$oldAmount){
        return response()->json([
            'code'=>0,
            'reason'=>'Data Not Found',
        ]);
    }

    if($request->ac_no == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid Account No.',
        ]);
    }
    elseif($request->payment_date == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid  Date',
        ]);
    }
    elseif($request->payment_amount == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid  Amount',
        ]);
    }
    elseif($request->description == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid Type',
        ]);
    }

    if($request->send_sms == ''){
        $sms = 0;
    }else{
        $sms = 2;
    }
    $time = Date('H:i:s');
    $payDate = Date("Y-m-d $time",strtotime($request->payment_date));
    $isUpdate = Payment::find($id)->update([
        'ac_no'=>$request->ac_no,
        'pay_amount'=>$request->payment_amount,
        'description'=>$request->description,
        'pay_date'=>$payDate,
        'send_sms'=>$sms,
    ]);
    $custData = Customer::select('id','previous_balance')->where('ac_no',$request->ac_no)->orderby('id','desc')->first();
    $balanceCor = $request->payment_amount;
    if($oldAmount['pay_amount'] >= $request->payment_amount){
        $balanceCor = $oldAmount['pay_amount']-$request->payment_amount;
        $custBlnc = $custData['previous_balance']+$balanceCor;
        Customer::find($custData['id'])->update(['previous_balance'=>$custBlnc]);
    }
    else{
        $balanceCor = $request->payment_amount-$oldAmount['pay_amount'];
        $custBlnc = $custData['previous_balance']-$balanceCor;
        Customer::find($custData['id'])->update(['previous_balance'=>$custBlnc]);
    }

    if($isUpdate){
        return response()->json([
            'code'=>1,
            'reason'=>'Payment Updated Successfully',
        ]);
    }
    else{
        return response()->json([
            'code'=>0,
            'reason'=>'Payment Update Failed!',
        ]);
    }
}


public function DestroyPayment(Request $r){
    $id = $r->id;
    if($id == ''){
        return response()->json([
            'code'=>0,
            'reason'=>'Invalid ID',
        ]);
    }
    $PayData = Payment::find($id);
    if($PayData){
        $isDelete = Payment::find($PayData['id'])->delete();
        if($isDelete){
            $CustData = Customer::select('id','previous_balance')->where('ac_no',$PayData['ac_no'])->orderby('id','desc')->first();
            $newBalance = $CustData['previous_balance']+$PayData['pay_amount'];
            $isUpdate = Customer::find($CustData['id'])->update(['previous_balance'=>$newBalance]);
            return response()->json([
                'code'=>1,
                'reason'=>'Data Deleted Successfully',
            ]);
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Data Delete Failed!',
            ]);
        }
    }
    else{
        return response()->json([
            'code'=>0,
            'reason'=>'Data Not Found',
        ]);
    }
}




////// report //////


    /// Customer Statement //

    public function GetCustomerStatement(Request $r){
        if($r->ac_no == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Account No.'
            ]);
        }
        $acNo = $r->ac_no;
        if($acNo == 'ALL'){
            $PaymentData = Payment::all();
        }else{
            $PaymentData = Payment::where('ac_no',$acNo)->get();
        }
        if($acNo == 'ALL'){
            $DepositData = Deposit::all();
        }else{
            $DepositData = Deposit::where('ac_no',$acNo)->get();
        }
        
        $dataArr = [];
        $i = 0;
        foreach($PaymentData as $item){
            $dataArr[$i]['desciption'] = $item->description;
            $dataArr[$i]['pay_amount'] = $item->pay_amount;
            $dataArr[$i]['dep_amount'] = '';
            $dataArr[$i]['date'] = $item->pay_date;
            $i++;
        }
        
        foreach($DepositData as $item){
            $dataArr[$i]['desciption'] = $item->description;
            $dataArr[$i]['pay_amount'] = '';
            $dataArr[$i]['dep_amount'] = $item->deposit_amount;
            $dataArr[$i]['date'] = $item->deposit_date;
            $i++;
        }
        $resultData =  collect($dataArr);
        $resultData = $resultData->sortBy('date')->values()->all();
        
        $netBalance = 0;
        $totalDep = 0;
        $totalPay = 0;
        $sl = 0;
        $result = [];
        foreach($resultData as $item){
            $totalDep += floatval($item['dep_amount']); 
            $totalPay += floatval($item['pay_amount']); 
            $netBalance += floatval($item['dep_amount'])-floatval($item['pay_amount']);
            
            $result[$sl]['sl'] = $sl;
            $result[$sl]['date'] = Date('d.m.Y',strtotime($item['date']));
            $result[$sl]['desciption'] = $item['desciption'];
            $result[$sl]['deposit_amount'] = number_format(floatval($item['dep_amount']),2);
            $result[$sl]['payment_amount'] = number_format(floatval($item['pay_amount']),2);
            $result[$sl]['total'] = number_format(floatval($netBalance),2);
            $sl++;
        }


        return $result;
    }

    /// Daily Collection ///

    public function GetDailyCollection(Request $r){
        if($r->from_date == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid From Date',
            ]);
        }
        elseif($r->to_date == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid To Date',
            ]);
        }

        $FromDate = Date('Y-m-d 00:00:00',strtotime($r->from_date));
        $ToDate = Date('Y-m-d 23:59:59',strtotime($r->to_date));
        $PaymentData = Payment::select('ac_no')->whereBetween('pay_date',[$FromDate,$ToDate])->groupBy('ac_no')->get();
        $DepositData = Deposit::select('ac_no')->whereBetween('deposit_date',[$FromDate,$ToDate])->groupby('ac_no')->get();
        
        $dataArr = [];
        foreach($PaymentData as $item){
            array_push($dataArr,$item->ac_no);
        }
        foreach($DepositData as $item){
            array_push($dataArr,$item->ac_no);
        }

        $acData = array_unique($dataArr);
        // sort($acData);
        $resultArr = [];
        $k =0;
        foreach($acData as $item){
            $custInfo = Customer::where('ac_no',$item)->orderby('id','desc')->first();
            $resultArr[$k]['ac_no'] = $item;
            $resultArr[$k]['name'] = $custInfo['name'];
            $resultArr[$k]['opening_date'] = $custInfo['opening_date'];
            $PaymentSum = Payment::select('pay_amount')->where('ac_no',$item)->where('pay_date','<',$FromDate)->sum('pay_amount');
            $DepositSum = Deposit::select('deposit_amount')->where('ac_no',$item)->where('deposit_date','<',$FromDate)->sum('deposit_amount');
            $resultArr[$k]['pre_balance'] = $DepositSum-$PaymentSum;
            $PayDateSum = Payment::select('pay_amount')->where('ac_no',$item)->whereBetween('pay_date',[$FromDate,$ToDate])->sum('pay_amount');
            $resultArr[$k]['payment'] = $PayDateSum;
            $DepDatetSum = Deposit::select('deposit_amount')->where('ac_no',$item)->whereBetween('deposit_date',[$FromDate,$ToDate])->sum('deposit_amount');
            $resultArr[$k]['deposit'] = $DepDatetSum;
            $k++;
        }


        $netBalance = 0;
        $totalDep = 0;
        $totalPay = 0;
        $PreBlnc = 0;
        $totalNetBlnc = 0;
        $sl = 0;
        $result = [];
        foreach($resultArr as $item){
            $totalDep += floatval($item['deposit']); 
            $totalPay += floatval($item['payment']); 
            $PreBlnc += floatval($item['pre_balance']); 
            $netBalance = floatval($item['pre_balance'])+floatval($item['deposit'])-floatval($item['payment']);
            $totalNetBlnc += floatval($netBalance); 
           

            $result[$sl]['ac_no'] = $item['ac_no'];
            $result[$sl]['name'] = $item['name'];
            $result[$sl]['date'] = Date('d.m.Y',strtotime($item['opening_date']));
            $result[$sl]['previous_balance'] = number_format(floatval($item['pre_balance']),2);
            $result[$sl]['deposit'] = number_format(floatval($item['deposit']),2);
            $result[$sl]['payment'] = number_format(floatval($item['payment']),2);
            $result[$sl]['net_balance'] = number_format(floatval($netBalance),2);
            $sl++;
        }

        return $result;

    }



    public function getMarketWiseReportResult(Request $r){
        if($r->market_name == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Market Name',
            ]);
        }
        $MarketList = Customer::select('market')->orderby('market','asc')->groupby('market')->get();
        $marketName = $r->market_name;
        $CustomerList = Customer::select('opening_date','name','previous_balance','ac_no')->where('market',$marketName)->orderby('opening_date','asc')->get();

        $PreBlnc = 0;
        $sl = 0;
        $result = [];
        foreach($CustomerList as $item) {
            $PreBlnc += floatval($item['previous_balance']);
            $result[$sl]['ac_no'] = $item['ac_no'];
            $result[$sl]['name'] = $item['name'];
            $result[$sl]['opening_date'] = Date('d.m.Y',strtotime($item['opening_date']));
            $result[$sl]['previous_balance'] = number_format(floatval($item['previous_balance']),2);
            $sl++;
        }

        return $result;
    }

    public function getDepositTransection(Request $r){
        if($r->from_date == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid From Date',
            ]);
        }
        elseif($r->to_date == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid To Date',
            ]);
        }
        elseif($r->deposit_type == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Deposit Type',
            ]);
        }
        $FromDate = Date('Y-m-d 00:00:00',strtotime($r->from_date));
        $ToDate = Date('Y-m-d 23:59:59',strtotime($r->to_date));
        $depositType = $r->deposit_type;
        if($depositType == 'ALL'){
            $DepositData = Deposit::select('ac_no')->whereBetween('deposit_date',[$FromDate,$ToDate])->groupby('ac_no')->get();
        }
        else{
            $DepositData = Deposit::select('ac_no')->where('description',$depositType)->whereBetween('deposit_date',[$FromDate,$ToDate])->groupby('ac_no')->get();
        }
        
        $dataArr = [];
        foreach($DepositData as $item){
            array_push($dataArr,$item->ac_no);
        }

        $acData = array_unique($dataArr);
        // sort($acData);
        $resultArr = [];
        $k =0;
        foreach($acData as $item){
            $custInfo = Customer::where('ac_no',$item)->orderby('id','desc')->first();
            $resultArr[$k]['ac_no'] = $item;
            $resultArr[$k]['name'] = $custInfo['name'];
            $resultArr[$k]['opening_date'] = $custInfo['opening_date'];
            $PaymentSum = Payment::select('pay_amount')->where('ac_no',$item)->where('pay_date','<',$FromDate)->sum('pay_amount');
            $DepositSum = Deposit::select('deposit_amount')->where('ac_no',$item)->where('deposit_date','<',$FromDate)->sum('deposit_amount');
            $resultArr[$k]['pre_balance'] = $DepositSum-$PaymentSum;
            if($depositType == 'ALL'){
                $DepSum = Deposit::select('deposit_amount')->where('ac_no',$item)->where('description','Deposit')->whereBetween('deposit_date',[$FromDate,$ToDate])->sum('deposit_amount');
                $ColSum = Deposit::select('deposit_amount')->where('ac_no',$item)->where('description','Collection')->whereBetween('deposit_date',[$FromDate,$ToDate])->sum('deposit_amount');
                $resultArr[$k]['deposit'] = $DepSum;
                $resultArr[$k]['collection'] = $ColSum;
            }else{
                $depositType = strtolower($depositType);
                $depositType = ucfirst($depositType);
                $DepTypeSum = Deposit::select('deposit_amount')->where('ac_no',$item)->where('description',$depositType)->whereBetween('deposit_date',[$FromDate,$ToDate])->sum('deposit_amount');
                $resultArr[$k]['dep_type_wise'] = $DepTypeSum;
            }
            $resultArr[$k]['type'] = $depositType;
            $k++;
        }

        $PreBlnc = 0;
        $totalDep = 0;
        $totalCol = 0;
        $sl = 0;
        $result = [];
        foreach ($resultArr as $item) {
            $PreBlnc += floatval($item['pre_balance']);
            $result[$sl]['ac_no'] = $item['ac_no'];
            $result[$sl]['name'] = $item['name'];
            $result[$sl]['opening_date'] = Date('d.m.Y',strtotime($item['opening_date']));
            $result[$sl]['pre_balance'] = number_format(floatval($item['pre_balance']),2);
            $result[$sl]['type'] = $item['type'];
            
            if($item['type'] == 'ALL'){
                $result[$sl]['deposit'] = number_format(floatval($item['deposit']),2);
                $totalDep += floatval($item['deposit']); 
            }
            elseif($item['type'] == 'Deposit'){
                $result[$sl]['deposit'] = number_format(floatval($item['dep_type_wise']),2);
            }
            else{
                $result[$sl]['deposit'] = number_format(floatval('0'),2);
            }
            
             
            if($item['type'] == 'ALL'){
                $result[$sl]['collection'] =  number_format(floatval($item['collection']),2);
                $totalCol += floatval($item['collection']); 

            }
            elseif($item['type'] == 'Collection'){
                $result[$sl]['collection'] =  number_format(floatval($item['dep_type_wise']),2);
                $totalCol += floatval($item['dep_type_wise']); 
            }
            else{
                $result[$sl]['collection'] = number_format(floatval('0'),2);
            }


            $sl++;

        }

        return $result;
    }

    // App Login //
    public function AppLogin(Request $r){
        $userName = $r->username;
        $passWord = $r->password;
        if($userName == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Username'
            ]);
        }
        elseif($passWord == ''){
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid Passsword'
            ]);
        }

        $User = User::where('email',$userName)->where('pass_show',$passWord)->orderby('id','desc')->first();
        if($User){
            $User['code'] = 1;
            return $User;
        }
        else{
            return response()->json([
                'code'=>0,
                'reason'=>'Invalid User'
            ]);
        }

    }


}
