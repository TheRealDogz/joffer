<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function list()
    {
        return Job::all();
    }
    public function detail($id)
    {
        return Job::find($id);
    }

    public function create(Request $req)
    {
        $jobData = json_decode($req->getContent());

        $job = new Job();

        $job->linguaggio = $jobData->linguaggio;
        $job->azienda = $jobData->azienda;
        $job->RAL = $jobData->RAL;
        $job->esperienza = $jobData->esperienza;
        $job->location = $jobData->location;
        $job->descrizione = $jobData->descrizione;

        $job->save();
        return $job;
    }
    public function modify(Request $req, $id)
    {
        $jobData = json_decode($req->getContent());

        $editJob = Job::find($id);

        $editJob->linguaggio = $jobData->linguaggio;
        $editJob->azienda = $jobData->azienda;
        $editJob->RAL = $jobData->RAL;
        $editJob->esperienza = $jobData->esperienza;
        $editJob->location = $jobData->location;
        $editJob->descrizione = $jobData->descrizione;

        $editJob->save();
        return $editJob;
    }
    public function delete($id)
    {
        return Job::destroy($id);
    }
}
