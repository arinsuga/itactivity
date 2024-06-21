<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("job")->insert([ "id" => 1, "code" => "FOUND", "name" => "FOUNDER", "displayname" => "FOUNDER", "description" => "FOUNDER", "numsort" => 10, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 2, "code" => "KOM", "name" => "KOMISARIS", "displayname" => "KOMISARIS", "description" => "KOMISARIS", "numsort" => 20, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 3, "code" => "DIRUT", "name" => "DIREKTUR UTAMA", "displayname" => "DIREKTUR UTAMA", "description" => "DIREKTUR UTAMA", "numsort" => 30, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 4, "code" => "DIROPS", "name" => "DIR. OPERASIONAL", "displayname" => "DIR. OPERASIONAL", "description" => "DIR. OPERASIONAL", "numsort" => 40, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 5, "code" => "FINCTL", "name" => "FINANCIAL CONTROLLER", "displayname" => "FINANCIAL CONTROLLER", "description" => "FINANCIAL CONTROLLER", "numsort" => 50, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 6, "code" => "DISPRIN", "name" => "PRINCIPAL DESAINER", "displayname" => "PRINCIPAL DESAINER", "description" => "PRINCIPAL DESAINER", "numsort" => 60, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 7, "code" => "KADEP", "name" => "Kepala Departement", "displayname" => "Kepala Departement", "description" => "Kepala Departement", "numsort" => 70, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 8, "code" => "KADIV", "name" => "Kepala Divisi", "displayname" => "Kepala Divisi", "description" => "Kepala Divisi", "numsort" => 80, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 9, "code" => "DIS", "name" => "DESAINER", "displayname" => "DESAINER", "description" => "DESAINER", "numsort" => 90, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 10, "code" => "PM", "name" => "PM", "displayname" => "PM", "description" => "PM", "numsort" => 100, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 11, "code" => "PPC", "name" => "PPC", "displayname" => "PPC", "description" => "PPC", "numsort" => 110, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 12, "code" => "PROKO", "name" => "Project Koordinator", "displayname" => "Project Koordinator", "description" => "Project Koordinator", "numsort" => 120, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 13, "code" => "HEADSTU", "name" => "KEP. STUDIO PROD", "displayname" => "KEP. STUDIO PROD", "description" => "KEP. STUDIO PROD", "numsort" => 130, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 14, "code" => "QC", "name" => "QUALITY CONTROL", "displayname" => "QUALITY CONTROL", "description" => "QUALITY CONTROL", "numsort" => 140, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 15, "code" => "ARSENG", "name" => "Architect Engineer", "displayname" => "Architect Engineer", "description" => "Architect Engineer", "numsort" => 150, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 16, "code" => "DTLQCDRF", "name" => "DETAILE / QCDRAFT", "displayname" => "DETAILE / QCDRAFT", "description" => "DETAILE / QCDRAFT", "numsort" => 160, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 17, "code" => "SPEKTOR", "name" => "PRESPEKTOR", "displayname" => "PRESPEKTOR", "description" => "PRESPEKTOR", "numsort" => 170, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 18, "code" => "EST", "name" => "ESTIMATOR", "displayname" => "ESTIMATOR", "description" => "ESTIMATOR", "numsort" => 180, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 19, "code" => "DISASS", "name" => "ASS. DESAINER", "displayname" => "ASS. DESAINER", "description" => "ASS. DESAINER", "numsort" => 190, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 20, "code" => "DRAFTARS", "name" => "DRAFTER ARSITEKTUR", "displayname" => "DRAFTER ARSITEKTUR", "description" => "DRAFTER ARSITEKTUR", "numsort" => 200, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 21, "code" => "ADM", "name" => "ADMINISTRASI", "displayname" => "ADMINISTRASI", "description" => "ADMINISTRASI", "numsort" => 210, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 22, "code" => "PENGAWAS", "name" => "PENGAWAS", "displayname" => "PENGAWAS", "description" => "PENGAWAS", "numsort" => 220, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 23, "code" => "ADPRO", "name" => "ADPRO", "displayname" => "ADPRO", "description" => "ADPRO", "numsort" => 230, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 24, "code" => "3DART", "name" => "3D ARTIS", "displayname" => "3D ARTIS", "description" => "3D ARTIS", "numsort" => 240, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 25, "code" => "DRAFTMKT", "name" => "DRAFT MAKETTER", "displayname" => "DRAFT MAKETTER", "description" => "DRAFT MAKETTER", "numsort" => 250, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 26, "code" => "PLK", "name" => "PELAKSANA", "displayname" => "PELAKSANA", "description" => "PELAKSANA", "numsort" => 260, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 27, "code" => "SM", "name" => "SM", "displayname" => "SM", "description" => "SM", "numsort" => 270, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 28, "code" => "OPRTLP", "name" => "OPERATOR TLP", "displayname" => "OPERATOR TLP", "description" => "OPERATOR TLP", "numsort" => 280, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 29, "code" => "KOORENG", "name" => "KOOR ENGINEER", "displayname" => "KOOR ENGINEER", "description" => "KOOR ENGINEER", "numsort" => 290, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 30, "code" => "SPECWRT", "name" => "SPECT WRITTER", "displayname" => "SPECT WRITTER", "description" => "SPECT WRITTER", "numsort" => 300, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 31, "code" => "ASSTPC", "name" => "ASIST. PC", "displayname" => "ASIST. PC", "description" => "ASIST. PC", "numsort" => 310, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 32, "code" => "ILLUSTRATOR", "name" => "ILLUSTRATOR", "displayname" => "ILLUSTRATOR", "description" => "ILLUSTRATOR", "numsort" => 320, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 33, "code" => "DRAFTER ", "name" => "DRAFTER ", "displayname" => "DRAFTER ", "description" => "DRAFTER ", "numsort" => 330, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 34, "code" => "DTLSPECCTL", "name" => "DETAIL SPEC.CONTROL", "displayname" => "DETAIL SPEC.CONTROL", "description" => "DETAIL SPEC.CONTROL", "numsort" => 340, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 35, "code" => "DRIVER", "name" => "DRIVER", "displayname" => "DRIVER", "description" => "DRIVER", "numsort" => 350, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 36, "code" => "SECURITY", "name" => "SECURITY", "displayname" => "SECURITY", "description" => "SECURITY", "numsort" => 360, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 37, "code" => "QA", "name" => "QUALITY ASSURANCE", "displayname" => "QUALITY ASSURANCE", "description" => "QUALITY ASSURANCE", "numsort" => 370, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 38, "code" => "STAFFMKT", "name" => "STAFF MARKETING", "displayname" => "STAFF MARKETING", "description" => "STAFF MARKETING", "numsort" => 380, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 39, "code" => "INTAUD", "name" => "INTERNAL AUDIT", "displayname" => "INTERNAL AUDIT", "description" => "INTERNAL AUDIT", "numsort" => 390, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 40, "code" => "KSR", "name" => "STAFF KASIR", "displayname" => "STAFF KASIR", "description" => "STAFF KASIR", "numsort" => 400, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 41, "code" => "SEXEC", "name" => "SENIOR EXECUTIVE", "displayname" => "SENIOR EXECUTIVE", "description" => "SENIOR EXECUTIVE", "numsort" => 410, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 42, "code" => "STAFFGDG", "name" => "STAFF GUDANG", "displayname" => "STAFF GUDANG", "description" => "STAFF GUDANG", "numsort" => 420, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 43, "code" => "KURIR", "name" => "KURIR", "displayname" => "KURIR", "description" => "KURIR", "numsort" => 430, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 44, "code" => "DIRDIS", "name" => "DIREKTUR DESAIN", "displayname" => "DIREKTUR DESAIN", "description" => "DIREKTUR DESAIN", "numsort" => 440, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 45, "code" => "KOORDKEND", "name" => "KOORD. KENDARAAN", "displayname" => "KOORD. KENDARAAN", "description" => "KOORD. KENDARAAN", "numsort" => 450, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 46, "code" => "STAFFPJK", "name" => "STAFF PAJAK", "displayname" => "STAFF PAJAK", "description" => "STAFF PAJAK", "numsort" => 460, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 47, "code" => "RECEPTIONIST", "name" => "RECEPTIONIST", "displayname" => "RECEPTIONIST", "description" => "RECEPTIONIST", "numsort" => 470, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 48, "code" => "STAFFIT", "name" => "STAFF IT", "displayname" => "STAFF IT", "description" => "STAFF IT", "numsort" => 480, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 49, "code" => "OFFBOY", "name" => "OFFICE BOY", "displayname" => "OFFICE BOY", "description" => "OFFICE BOY", "numsort" => 490, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 50, "code" => "TEKHNISI", "name" => "TEKHNISI", "displayname" => "TEKHNISI", "description" => "TEKHNISI", "numsort" => 500, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 51, "code" => "STAFFKEU", "name" => "STAFF KEUANGAN", "displayname" => "STAFF KEUANGAN", "description" => "STAFF KEUANGAN", "numsort" => 510, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 52, "code" => "KORPRCDIS", "name" => "KORD.PERENC/DIS", "displayname" => "KORD.PERENC/DIS", "description" => "KORD.PERENC/DIS", "numsort" => 520, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 53, "code" => "STAFFPLK", "name" => "STAFF PELAKSANA", "displayname" => "STAFF PELAKSANA", "description" => "STAFF PELAKSANA", "numsort" => 530, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 54, "code" => "STAFFLOG", "name" => "STAFF LOGISTIK", "displayname" => "STAFF LOGISTIK", "description" => "STAFF LOGISTIK", "numsort" => 540, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 55, "code" => "STAFFACT", "name" => "STAFF ACCOUNTING", "displayname" => "STAFF ACCOUNTING", "description" => "STAFF ACCOUNTING", "numsort" => 550, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 56, "code" => "STAFFPERPUS", "name" => "STAFF PERPUSTAKAAN", "displayname" => "STAFF PERPUSTAKAAN", "description" => "STAFF PERPUSTAKAAN", "numsort" => 560, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 57, "code" => "STAFFSEK", "name" => "STAFF SEKRETARIAT", "displayname" => "STAFF SEKRETARIAT", "description" => "STAFF SEKRETARIAT", "numsort" => 570, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 58, "code" => "STAFFTAGIH", "name" => "STAFF PENAGIHAN", "displayname" => "STAFF PENAGIHAN", "description" => "STAFF PENAGIHAN", "numsort" => 580, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 59, "code" => "KPSTUDIO", "name" => "DRAFT/KP.STUDIO", "displayname" => "DRAFT/KP.STUDIO", "description" => "DRAFT/KP.STUDIO", "numsort" => 590, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 60, "code" => "ASS.DIS.LANDSCAPE", "name" => "ASS.DIS.LANDSCAPE", "displayname" => "ASS.DIS.LANDSCAPE", "description" => "ASS.DIS.LANDSCAPE", "numsort" => 600, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 61, "code" => "DRAWING QC", "name" => "DRAWING QC", "displayname" => "DRAWING QC", "description" => "DRAWING QC", "numsort" => 610, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 62, "code" => "PRODUKSI", "name" => "PRODUKSI", "displayname" => "PRODUKSI", "description" => "PRODUKSI", "numsort" => 620, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 63, "code" => "STAFF PENUNJANG", "name" => "STAFF PENUNJANG", "displayname" => "STAFF PENUNJANG", "description" => "STAFF PENUNJANG", "numsort" => 630, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 64, "code" => "PROJECT CONTROL", "name" => "PROJECT CONTROL", "displayname" => "PROJECT CONTROL", "description" => "PROJECT CONTROL", "numsort" => 640, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 65, "code" => "ASS.ARSITEK", "name" => "ASS.ARSITEK", "displayname" => "ASS.ARSITEK", "description" => "ASS.ARSITEK", "numsort" => 650, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 66, "code" => "ASS.PERENCANAAN", "name" => "ASS.PERENCANAAN", "displayname" => "ASS.PERENCANAAN", "description" => "ASS.PERENCANAAN", "numsort" => 660, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 67, "code" => "LANDSCAPE", "name" => "LANDSCAPE", "displayname" => "LANDSCAPE", "description" => "LANDSCAPE", "numsort" => 670, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 68, "code" => "STAFF DRAFTER", "name" => "STAFF DRAFTER", "displayname" => "STAFF DRAFTER", "description" => "STAFF DRAFTER", "numsort" => 680, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 69, "code" => "SUPERVISOR", "name" => "SUPERVISOR", "displayname" => "SUPERVISOR", "description" => "SUPERVISOR", "numsort" => 690, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 70, "code" => "COST CONTROL", "name" => "COST CONTROL", "displayname" => "COST CONTROL", "description" => "COST CONTROL", "numsort" => 700, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 71, "code" => "Desainer Produk", "name" => "Desainer Produk", "displayname" => "Desainer Produk", "description" => "Desainer Produk", "numsort" => 710, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 72, "code" => "DRAFTER LANDSCAPE", "name" => "DRAFTER LANDSCAPE", "displayname" => "DRAFTER LANDSCAPE", "description" => "DRAFTER LANDSCAPE", "numsort" => 720, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 73, "code" => "KABAG OPERASIONAL", "name" => "KABAG OPERASIONAL", "displayname" => "KABAG OPERASIONAL", "description" => "KABAG OPERASIONAL", "numsort" => 730, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 74, "code" => "Marketing Officer", "name" => "Marketing Officer", "displayname" => "Marketing Officer", "description" => "Marketing Officer", "numsort" => 740, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 75, "code" => "INTERIOR ENGGINERING", "name" => "INTERIOR ENGGINERING", "displayname" => "INTERIOR ENGGINERING", "description" => "INTERIOR ENGGINERING", "numsort" => 750, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 76, "code" => "Project Desainer", "name" => "Project Desainer", "displayname" => "Project Desainer", "description" => "Project Desainer", "numsort" => 760, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 77, "code" => "ISO OFFICER", "name" => "ISO OFFICER", "displayname" => "ISO OFFICER", "description" => "ISO OFFICER", "numsort" => 770, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 78, "code" => "PUBLIC RELATIONS", "name" => "PUBLIC RELATIONS", "displayname" => "PUBLIC RELATIONS", "description" => "PUBLIC RELATIONS", "numsort" => 780, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 79, "code" => "Desainer Landscape", "name" => "Desainer Landscape", "displayname" => "Desainer Landscape", "description" => "Desainer Landscape", "numsort" => 790, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 80, "code" => "MARKETING PELAKSANAAN", "name" => "MARKETING PELAKSANAAN", "displayname" => "MARKETING PELAKSANAAN", "description" => "MARKETING PELAKSANAAN", "numsort" => 800, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 81, "code" => "IT Support", "name" => "IT Support", "displayname" => "IT Support", "description" => "IT Support", "numsort" => 810, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 82, "code" => "IT Programmer", "name" => "IT Programmer", "displayname" => "IT Programmer", "description" => "IT Programmer", "numsort" => 820, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 83, "code" => "Associate", "name" => "Associate", "displayname" => "Associate", "description" => "Associate", "numsort" => 830, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 84, "code" => "Desainer Arsitektur", "name" => "Desainer Arsitektur", "displayname" => "Desainer Arsitektur", "description" => "Desainer Arsitektur", "numsort" => 840, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 85, "code" => "Legal Officer", "name" => "Legal Officer", "displayname" => "Legal Officer", "description" => "Legal Officer", "numsort" => 850, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 86, "code" => "Marketing Interior Designer", "name" => "Marketing Interior Designer", "displayname" => "Marketing Interior Designer", "description" => "Marketing Interior Designer", "numsort" => 860, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 87, "code" => "Desainer Utama", "name" => "Desainer Utama", "displayname" => "Desainer Utama", "description" => "Desainer Utama", "numsort" => 870, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 88, "code" => "Kepala Produksi", "name" => "Kepala Produksi", "displayname" => "Kepala Produksi", "description" => "Kepala Produksi", "numsort" => 880, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 89, "code" => "Koordinator Project Control", "name" => "Koordinator Project Control", "displayname" => "Koordinator Project Control", "description" => "Koordinator Project Control", "numsort" => 890, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 90, "code" => "Project Cost Controll", "name" => "Project Cost Controll", "displayname" => "Project Cost Controll", "description" => "Project Cost Controll", "numsort" => 900, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 91, "code" => "Desainer Interior", "name" => "Desainer Interior", "displayname" => "Desainer Interior", "description" => "Desainer Interior", "numsort" => 910, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 92, "code" => "Kepala Bagian Umum", "name" => "Kepala Bagian Umum", "displayname" => "Kepala Bagian Umum", "description" => "Kepala Bagian Umum", "numsort" => 920, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 93, "code" => "Installer", "name" => "Installer", "displayname" => "Installer", "description" => "Installer", "numsort" => 930, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 94, "code" => "Koordinator Principal Desainer", "name" => "Koordinator Principal Desainer", "displayname" => "Koordinator Principal Desainer", "description" => "Koordinator Principal Desainer", "numsort" => 940, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 95, "code" => "Bussiness Development", "name" => "Bussiness Development", "displayname" => "Bussiness Development", "description" => "Bussiness Development", "numsort" => 950, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 96, "code" => "Koord.Team Desainer", "name" => "Koord.Team Desainer", "displayname" => "Koord.Team Desainer", "description" => "Koord.Team Desainer", "numsort" => 960, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 97, "code" => "Desainer Lighting", "name" => "Desainer Lighting", "displayname" => "Desainer Lighting", "description" => "Desainer Lighting", "numsort" => 970, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 98, "code" => "Chief Security", "name" => "Chief Security", "displayname" => "Chief Security", "description" => "Chief Security", "numsort" => 980, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 99, "code" => "Staff GA", "name" => "Staff GA", "displayname" => "Staff GA", "description" => "Staff GA", "numsort" => 990, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 100, "code" => "Project Support Koordinator", "name" => "Project Support Koordinator", "displayname" => "Project Support Koordinator", "description" => "Project Support Koordinator", "numsort" => 1000, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 101, "code" => "IT Server", "name" => "IT Server", "displayname" => "IT Server", "description" => "IT Server", "numsort" => 1010, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 102, "code" => "IT Network", "name" => "IT Network", "displayname" => "IT Network", "description" => "IT Network", "numsort" => 1020, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 103, "code" => "Brand Representative", "name" => "Brand Representative", "displayname" => "Brand Representative", "description" => "Brand Representative", "numsort" => 1030, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 104, "code" => "Owner Representative", "name" => "Owner Representative", "displayname" => "Owner Representative", "description" => "Owner Representative", "numsort" => 1040, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 105, "code" => "Supervisor Accounting", "name" => "Supervisor Accounting", "displayname" => "Supervisor Accounting", "description" => "Supervisor Accounting", "numsort" => 1050, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 106, "code" => "Supervisor Keuangan", "name" => "Supervisor Keuangan", "displayname" => "Supervisor Keuangan", "description" => "Supervisor Keuangan", "numsort" => 1060, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 107, "code" => "Staff HRD", "name" => "Staff HRD", "displayname" => "Staff HRD", "description" => "Staff HRD", "numsort" => 1070, "status" => 1, ]); 
        DB::table("job")->insert([ "id" => 108, "code" => "Design Strategic Partner", "name" => "Design Strategic Partner", "displayname" => "Design Strategic Partner", "description" => "Design Strategic Partner", "numsort" => 1080, "status" => 1, ]); 
                
    }
}
