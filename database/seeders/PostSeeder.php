<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
            'title' => 'Karnataka Elections LIVE | Siddaramaiah Plays Hindi Card, Says ask In English Or Kannada',
            'content' => 'Voting for the Karnataka Assembly elections is currently underway and will conclude at 6 pm. The BJP, currently in power in Karnataka, will be looking to script history in the southern state which is in the habit of throwing out incumbents every five years. For Congress and JD(S), this is a battle for survival. Brace for the epic 224-seat contest. Watch out for all Karnataka election'
        ]);

        Post::create([
            'title' => 'Karnataka Exit Poll Result 2023: Countdown Begins, Know The Date, Time & Other Details',
            'content' => 'The voting for the single-phase Karnataka assembly elections commenced on Wednesday, May 10. Following the conclusion of the polling later in the evening, people will focus on the Exit Poll results, which may provide some indication of the voters preferences in the southern state. The Republic P-MARQ Exit poll will present the most correct projections prior to the official announcement of results on May 13 '
        ]);

        Post::create([
            'title' => 'India News LIVE: Women Wrestlers File Plea In Court, Seek Early Recording Of Statement',
            'content' => 'The Women wrestlers have filed 156(3) complaint before Rouse Avenue Court to monitor the investigation against WFI chief Brij Bhushan Sharan Singh. The minor victim and others have sought early recording of their statements saying in the petition that the police are "protracting the investigation" and not recording the victims statement before the court. Rouse Avenue court to hear the matter at 11 am.'
        ]);

        Post::create([
            'title' => 'Stunning Pics Of Amarnath Holy Shiv Lingam Emerge Ahead Of Yatra; Take A Look',
            'content' => 'First pictures of the shrine of Amarnath has surfaced, amid the ongoing registration and preparations for the annual pilgrimage to the cave of the holy shrine located in South Kashmir. According to reports, the pilgrimage to the holy Amarnath Shrine located at a height of around 3,880 metres will happen for 62 days this year, starting from July 1.'
        ]);

        Post::create([
            'title' => 'Ashwini Vaishnaw Meets Google CEO Sundar Pichai, Discusses India Stack & Make In India',
            'content' => 'Union Telecom and Information Technology Minister Ashwini Vaishnaw held a meeting with Google CEO Sundar Pichai at the Google headquarters on Tuesday. This was the second meeting between the two. '
        ]);
        Post::create([
            'title' => 'Amid Wrestlers Protest, TMC MP Calls For Panel To Check Sports Body Rules',
            'content' => 'Citing the protest by women wrestlers here, Trinamool Congress MP Sushmita Dev has urged a parliamentary standing committee to review the implementation of all statutory laws that apply to sports federations and other bodies and the role of the Sports Ministry.'
        ]);

        Post::create([
            'title' => 'Sharad Pawar Questions Congress Leaders stature Over Remarks On NCPs Karnataka Plans',
            'content' => 'Nationalist Congress Party chief Sharad Pawar on Tuesday questioned the "stature" of Congress leader Prithviraj Chavan in his own party after the latter targeted the NCP for fielding its candidates in the upcoming Karnataka Assembly polls.'
        ]);

        Post::create([
            'title' => 'Uttar Pradesh Bypolls: Voting Begins For Suar, Chhanbey Assembly Seats',
            'content' => 'Voting got underway in the bypolls to the Suar and Chhanbey Assembly constituencies in Uttar Pradesh Wednesday morning.There is a direct contest between the ruling coalition and the opposition Samajwadi Party in the bypolls. Though the results will have no precipitative impact on the constitution of the assembly, it will be a morale booster for the victor before the Lok Sabha poll next year.'
        ]);

        Post::create([
            'title' => 'In Latest opposition Unity Push, Nitish Kumar Meets Odisha CM Patnaik After Mamata',
            'content' => 'To strengthen the opposition unity push, Bihar Chief Minister Nitish Kumar and his Odisha counterpart Naveen Patnaik met in Bhubaneshwar on Tuesday (May 9). The meeting of the two senior leaders appears to be a clear indication that opposition parties are cobbling up a grand opposition alliance against the ruling BJP ahead of the 2024 Lok Sabha elections.'
        ]);

        Post::create([
            'title' => 'Jharkhand MLA Writes To CM Hemant Soren Seeking Ban On The Kerala Story; Heres Why',
            'content' => 'An MLA from Jamtara has now demanded Jharkhand CM Hemant Soren to impose a ban on the movie The Kerala Story. This comes after the West Bengal government announced a ban on the movie in the state. Congress leader Dr Irfan Ansari has written a letter to the Chief Minister seeking a ban on the movie. In his letter to the CM, Dr Ansari accused the film of promoting communal hatred, specifically aimed at benefiting the BJP in the Karnataka election, and therefore demanded a ban on the movie.'
        ]);
    }
}
