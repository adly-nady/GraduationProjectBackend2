<?php

namespace Database\Seeders;

use App\Models\department;
use App\Models\info_api;
use App\Models\item;
use App\Models\job_title;
use App\Models\qualification;
use App\Models\setting;
use App\Models\unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        job_title::create(["name"=>"مهندس برمجيات"]);
        job_title::create(["name"=>"مشرف عمال"]);
        job_title::create(["name"=>"أخصائي موارد بشرية"]);
        job_title::create(["name"=>"أخصائي توظيف"]);
        job_title::create(["name"=>"عامل انتاج"]);
        job_title::create(["name"=>"عامل تعبئة"]);
        job_title::create(["name"=>"امين مخزن"]);
        job_title::create(["name"=>"فني متخصص"]);
        job_title::create(["name"=>"مهندس انتاج"]);
        job_title::create(["name"=>"مساعد مهندس انتاج"]);
        job_title::create(["name"=>"مساعد فني متخصص"]);
        // ---------------------
        qualification::create(['name'=>"بكالوريوس",]);
        qualification::create(['name'=>"دبلوم",]);
        qualification::create(['name'=>"معهد",]);
        // ---------------------
        department::create(['name'=>"HR"]);
        department::create(['name'=>"IT"]);
        department::create(['name'=>"External Silos"]);
        department::create(['name'=>"Internal Silos"]);
        department::create(['name'=>"Burlap store"]);
        department::create(['name'=>"Spare Parts Store"]);
        department::create(['name'=>"Gateway"]);
        department::create(['name'=>"Bascule Scale"]);
        department::create(['name'=>"Laboratory"]);
        department::create(['name'=>"Maintenance"]);
        department::create(['name'=>"Electricity"]);
        department::create(['name'=>"Production"]);
        department::create(['name'=>"Packaging"]);
        department::create(['name'=>"Loading"]);
        department::create(['name'=>"Accounting"]);
        department::create(['name'=>"Purchases"]);
        department::create(['name'=>"Sales"]);
        // ---------------------
        $data_users = [[
            'FullName' => "adly nady",
            'email' => "AdlyNady@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>2,
            "job_title_id"=>1,
            "qualifications_id"=>1
        ],[
            'FullName' => "gasy kamal",
            'email' => "GasyKamal@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>2,
            "job_title_id"=>1,
            "qualifications_id"=>1
        ],[
            'FullName' => "taha sha3pan",
            'email' => "TahaSha3pan@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>2,
            "job_title_id"=>1,
            "qualifications_id"=>1
        ],[
            'FullName' => "remon ez",
            'email' => "RemonEz@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>1,
            "job_title_id"=>4,
            "qualifications_id"=>1
        ],[
            'FullName' => "karma magdi",
            'email' => "KarmaMagdi@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>1,
            "job_title_id"=>3,
            "qualifications_id"=>1
        ],[
            'FullName' => "christina atef",
            'email' => "ChristinaAtef@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>3,
            "job_title_id"=>3,
            "qualifications_id"=>1
        ],[
            'FullName' => "naiera hazem",
            'email' => "NaieraHazem@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>1,
            "job_title_id"=>2,
            "qualifications_id"=>1
        ],[
            'FullName' => "catherine melad",
            'email' => "CatherineMelad@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>3,
            "job_title_id"=>5,
            "qualifications_id"=>1
        ],[
            'FullName' => "Yara Adel",
            'email' => "YaraAdel@grevona.erp",
            'password' => \Hash::make('123456'),
            "department_id"=>4,
            "job_title_id"=>5,
            "qualifications_id"=>1
        ]];
        foreach ($data_users as $key) {
            User::create($key);
        }
        // ---------------------
        setting::create(['key'=>"logo",'value'=>"attachment/logo/logo.png"]);
        // ---------------------
        info_api::create([
            "HTTP_Method"=>"GET",
            "Endpoint"=>"api/get/user/{id}",
            "Description"=>"It returns user information using the ID, but it is worth noting that only the authorized administrator is allowed to request such a request.",
            "Parameters"=>"id (integer, required)",
            "Response_Example"=>'{"id":1, "FullName":"adly Nady", "image":"image/person/user1.png",<br> "email":"adly20nady@gmail.com", "phone":"01278933872",<br> "access_token":"eyJhbGciO.eyJpZCI6MTIzND.OpOSSw7e485LOP5", "Department":"IT"}',
            "style"=>"success"
        ]);
        info_api::create([
            "HTTP_Method"=>"POST",
            "Endpoint"=>"api/login",
            "Description"=>"It is used to allow employees who are registered in the system to enter the Grevona system.",
            "Parameters"=>"[email(string, required) , password(string, required)]",
            "Response_Example"=>'<span style="color:green">{"status": true,"message": "adly nady مرحبا يا","data": "eyJ0eXAiOiJ.KV1QiLCJhbGciOi.JIUzI1NiJ9"}</span><br><span style="color:red">{"status": false,"errCode": 403,"message": {"password": ["Incorrect Password"]}</span>',
            "style"=>"success"
        ]);
        info_api::create([
            "HTTP_Method"=>"GET",
            "Endpoint"=>"api/get/all/department",
            "Description"=>"Used to Return All System Department",
            "Parameters"=>"<span style='color:gray;font-weight: 900'>none</span>",
            "Response_Example"=>'<div style="text-align:left">[<br/>{"id": 1,"name": "HR","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 2,"name": "IT","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 3,"name": "External Silos","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 4,"name": "Internal Silos","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 5,"name": "Burlap store","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 6,"name": "Spare Parts Store","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 7,"name": "Gateway","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 8,"name": "Bascule Scale","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 9,"name": "Laboratory","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 10,"name": "Maintenance","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 11,"name": "Electricity","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 12,"name": "Production","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 13,"name": "Packaging","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 14,"name": "Loading","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 15,"name": "Accounting","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 16,"name": "Purchases","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"},<br/>{"id": 17,"name": "Sales","manager": null,"created_at": "2024-12-26T01:31:38.000000Z","updated_at": "2024-12-26T01:31:38.000000Z"}<br/>]</div>',
            "style"=>"success"
        ]);
        info_api::create([
            "HTTP_Method"=>"GET",
            "Endpoint"=>"api/get/all/units",
            "Description"=>"Used to Return All System units",
            "Parameters"=>"<span style='color:gray;font-weight: 900'>none</span>",
            "Response_Example"=>'<div style="text-align:left">[<br/>{"id": 1,"name": "كيلو","created_at": "2024-12-26T02:23:32.000000Z","updated_at": "2024-12-26T02:23:32.000000Z"},{"id": 2,"name": "عدد","created_at": "2024-12-26T02:23:32.000000Z","updated_at": "2024-12-26T02:23:32.000000Z"},<br/>]</div>',
            "style"=>"success"
        ]);
        info_api::create([
            "HTTP_Method"=>"GET",
            "Endpoint"=>"api/get/all/items",
            "Description"=>"Used to Return All System items",
            "Parameters"=>"<span style='color:gray;font-weight: 900'>none</span>",
            "Response_Example"=>'<div style="text-align:left"> [<br/>{"id": 1,"name": "جهاز كميبوتر DELL","images": "["attachment/Stores/dell.jpg"]","Description": "It is used in departments as a tool for recording reports on Excel.","unit_id": 2,"department_id": 5,"balance": 0,"minimum": 5,"type": "Burlap","created_at": "2024-12-26T02:23:32.000000Z","updated_at": "2024-12-26T02:23:32.000000Z"}<br/>] </div>',
            "style"=>"success"
        ]);
        // ---------------------
        unit::create(['name'=>"كيلو"]);
        unit::create(['name'=>"عدد"]);
        unit::create(['name'=>"طن"]);
        unit::create(['name'=>"متر"]);
        unit::create(['name'=>"سم"]);
        // ---------------------
        item::create([
            "name"=>"جهاز كميبوتر DELL",
            "images"=>"['attachment/Stores/dell.jpg']",
            "Description"=>"It is used in departments as a tool for recording reports on Excel.",
            "unit_id"=>2,
            "department_id"=>5,
            "balance"=>0,
            "minimum"=>5,
            "type"=>"Burlap"
        ]);
    }
}

