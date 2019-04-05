<?php

namespace App\Http\Controllers;

use App\Build_License_Request;
use App\Building_license;
use App\License;
use App\License_Cost_Item;
use App\License_Reports;
use App\License_Types;
use Illuminate\Http\Request;

class licenseController extends Controller
{
    public function licenseType(Request $request)
    {
        $li = new License_Types();
        $li->save();
        return response()->json(['license',"saved"],200);


    }

    public function licenseReport(Request $request)
    {
        $li = new License_Reports();
        $li->ORG_id = $request->ORG_id;
        $li->ReportName_EN = $request->ReportName_EN;
        $li->ReportName_AR = $request->ReportName_AR;

        $li->save();
        return response()->json(['license',"saved"],200);

    }
    public function insertBuildingLicense(Request $request)
    {
        $license = new Building_license();
        $license->ORG_id = $request->ORG_id;
        $license->Buliding_Type_id = $request->Buliding_Type_id;
        $license->Ref_license = $request->Ref_license;
        $license->Postal_Address = $request->Postal_Address;
        $license->Supervisor_Eng_id = $request->Supervisor_Eng_id;
        $license->Designer_Eng_id = $request->Designer_Eng_id;
        $license->License_Type = $request->License_Type;
        $license->Working_Area = $request->Working_Area;
        $license->TotalCost = $request->TotalCost;
        $license->User_ID = $request->User_ID;

        $license->save();

        return response()->json(['license',"saved"],200);

    }

    public function insertBuildingLicenseRequest(Request $request)
    {
        $licensereq = new Build_License_Request();
        $licensereq->Build_License_id = $request->Build_License_id;
        $licensereq->License_Type = $request->License_Type;
        $licensereq->Supervisor_Eng_id = $request->Supervisor_Eng_id;
        $licensereq->Designer_Eng_id = $request->Designer_Eng_id;
        $licensereq->License_Type = $request->License_Type;
        $licensereq->Working_Area = $request->Working_Area;
        $licensereq->Building_Type = $request->Building_Type;

        $licensereq->save();

        return response()->json(['license request', "saved"], 200);
    }

    public function AssignBuildingCost(Request $request)
    {
        $li = new License_Cost_Item();
        $li->building_cost_id = $request->building_cost_id;
        $li->item_id = $request->item_id;
        $li->ORG_id = $request->ORG_id;
        $li->item_name = $request->item_name;
        $li->unit_price = $request->unit_price;
        $li->discountprecent = $request->discountprecent;

        $li->save();
        return response()->json(['AssignBuildingCost',"saved"],200);

    }

    public function licenses(Request $request)
    {
        $l = new License();
        $l->ORG_id = $request->ORG_id;
        $l->License_Number = $request->License_Number;
        $l->License_Type_id = $request->License_Type_id;
        $l->License_Year = $request->License_Year;
        $l->Instance_id = $request->Instance_id;
        $l->Transaction_id = $request->Transaction_id;
        $l->LUS_id = $request->LUS_id;
        $l->Canceled = $request->Cancled;
        $l->Stopped = $request->Stopped;
        $l->File_Number = $request->File_Number;
        $l->Responsible_Engineer = $request->Responsible_Engineer;
        $l->Append_Char = $request->Append_Char;
        $l->Old_id = $request->Old_id;
        $l->License_Stop = $request->License_Stop;

        $l->save();
        return response()->json(['licenses',"saved"],200);

    }
}
