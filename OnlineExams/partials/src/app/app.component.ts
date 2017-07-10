import {Component, ElementRef,OnInit} from '@angular/core';
import { ApiAccess} from '../services/ApiAccess.services';
import {Subject,Test,Question,AnswerOption,Answer,Result} from '../models/all.model';
@Component({
    selector:"Quiz",
    providers: [ApiAccess],
    styles:
        [ 
            `
            .div-table {
            display: table;         
            width: auto;           
            width:100%;
            align:center;
            }
            .div-table-row {
            display: table-row;
            width: auto;
            clear: both;
            }
            .div-table-col {
            float: left; /* fix for  buggy browsers */
            display: table-column;         
           }
            .answer-box{
                border:solid 1px lightgray;
                background:gray;
                color:#fff;
                font-weight:bold;
                width:35px;
                height:35px;
                text-align:center;
                line-height: 35px;
                text-align: center;
            }
            .answerd{
                background:green;
            }
            .div-table-col-circle
            {
                float: left; 
                text-align:center;
                display: table-column;         
                width: 35px;    
                height:35px;
                line-height: 35px;     
                background: radial-gradient(white, #58D3F7);
                margin:1px;
                border-radius:50%;
                border:solid 1px gray;
                color:red;
                font-weight:bold;
            }
            ul{
              list-style-type:none;
            }
            .timer{
                text-align:center;
                width:111px;
                float:right;
            }
            td{width:50%;}
            .higlight
            {
                background-color:#F5A9BC;
                width:100%;
                margin-left:5px;
                margin-right:5px;
            }
            #btnsubmit{
                float:right;
            }
            `
        ],
    templateUrl:"partials/src/templates/quiz.html"
})   
export class AppComponent implements OnInit
{
    apiaccess:ApiAccess;
    subjects=new Array<Subject>();
    tests:Array<Test>;
    active_question=new Question();
    selectedSubject=new Subject();
    selectedTest= new Test();
    testResponse:any;
    answers:Array<Answer>;
    qid:number=1;
    qindex:number=1;
    test_duration:number;
    test_total_question:number=0;
    
    //timer variables
    hours:number=0;
    minutes:number=59;
    seconds:number = 60;
    showtimer:boolean=false;

    //buttons
    showStart:boolean=false;

    //result fields
    testResult:Result=new Result();
    //Completed
    isSaved:boolean;
    isCompleted:boolean;
 

    //user session
    sessionid:string;
    constructor(apiaccess:ApiAccess,private elementRef: ElementRef){
      this.apiaccess=apiaccess;
      this.showtimer=false;
      this.apiaccess.url=elementRef.nativeElement.getAttribute('url');
      this.sessionid=elementRef.nativeElement.getAttribute("sessionid");
    }
    startTest(){
        this.updateQuestion(this.qindex);
        this.showtimer=true;
        setInterval(() => { 
            this.seconds=this.seconds-1;  
            if(this.seconds==0){
                if(this.minutes>0)
                {
                this.minutes=this.minutes-1;
                this.seconds=60;
                }
                if(this.minutes==0){
                if(this.hours>0){
                    this.hours=this.hours-1;
                    this.minutes=60;
                }
                if(this.hours==0 && this.minutes==0 && this.seconds==0){
                    this.showtimer=false;
                }
            }
            }
       }, 1000);
      this.showStart=false;
    }
    updateQuestion(qindex:number){
        this.apiaccess.getQuestion(this.selectedTest.id,qindex).subscribe(
                data => {
                    if(data!=null)
                    {
                      this.active_question=data;
                      if(this.answers[qindex-1]!=null &&this.answers[qindex-1].answeroption!=null)
                      {
                        this.active_question.selectedAnswerId=this.answers[qindex-1].answeroption
                        this.active_question.id=qindex;
                      }
                      this.answers[qindex-1].questionid=this.active_question.id;
                      this.active_question.marked=this.answers[this.qindex-1].marked;
                      //console.log(this.active_question.marked);
                    }         
                }
            );
    }
    onTestChange(testid) {
        this.selectedTest.id=testid;
        this.tests.forEach(test => {
            if(test.id==testid){
               this.selectedTest.name=test.name;
               this.selectedTest.total_questions=test.total_questions;
               this.selectedTest.test_duration=test.test_duration;
               this.selectedTest.test_que_ids=test.test_que_ids;
               // console.log(test.test_que_ids);
            }
        });
       this.answers=new Array<Answer>();
       for (var index = 1; index <= this.selectedTest.total_questions; index++) 
        {
           var answer=new Answer();
           answer.questionid=this.selectedTest.test_que_ids[index];
           answer.questionindex=index;
           answer.marked=false;
           this.answers.push(answer);
           this.test_total_question++;
        }
         this.showStart=true;
    }
    onSubjecthange(subjectId){
        this.selectedSubject.id=subjectId;
        this.apiaccess.getTests(subjectId).subscribe(
                data => {
                this.testResponse = data;
                this.tests=data;
                var item=new Test();
                item.id=0;
                item.name="Select";
                this.tests.splice(0,0,item);
                }
            );
            
    }
    ngOnInit()
    {
        this.apiaccess.getSubjects().subscribe(
                data => {
                this.testResponse = data;
                this.subjects=data;
                var item=new Subject();
                item.id=0;
                item.name="Select";
                this.subjects.splice(0,0,item);
                }
            );
    }
    markForReview(){
        this.active_question.marked=!this.active_question.marked;
        this.answers[this.qindex-1].marked=this.active_question.marked;
        this.answers[this.qindex-1].answeroption=this.active_question.selectedAnswerId;
        this.answers[this.qindex-1].questionindex=this.qindex;
        this.answers[this.qindex-1].question=this.active_question.text;
        this.answers[this.qindex-1].answeroptions=this.active_question.answeroptions;  

    }

    selectedAnswer(selectedAnserId:number){
        this.active_question.selectedAnswerId=selectedAnserId;
        this.answers[this.qindex-1].answeroption=this.active_question.selectedAnswerId;
        this.answers[this.qindex-1].answerd=true;
        this.answers[this.qindex-1].questionindex=this.qindex;
        this.answers[this.qindex-1].question=this.active_question.text;
        this.answers[this.qindex-1].answeroptions=this.active_question.answeroptions;        

        //console.log(this.qindex);
    }
    goNext(){
       this.qindex++;
       this.updateQuestion(this.qindex);
    }
    goPreviouse(){
       this.qindex--;
       this.updateQuestion(this.qindex);
    }
    goToSpecificQuestion(questionindex:number){
        if(!this.showStart){
            this.qindex=questionindex;
            this.updateQuestion(this.qindex);
        }
        else{
            alert("Please Start Exam");
        }
    }
    saveAnswerSheet(){
       console.log(JSON.stringify(this.answers));
       
       this.isSaved=true;
    }
    clearAnswer(){
        this.active_question.selectedAnswerId=null;
        this.active_question.marked=null;
        let que_id=this.active_question.id;
        for (var index = 0; index < this.answers.length; index++) {
            var element = this.answers[index];
            let tque_id=element.questionid;
            if(tque_id==que_id){
                this.answers[index].answerd=false;
                this.answers[index].answeroption=null;
                this.answers[index].marked=false;
                break;
            }
        }
    }
    commitTest(){
        let result= this.apiaccess.updateAnswerSheet(this.sessionid,this.selectedSubject.id,this.selectedTest.id,this.answers);
       this.apiaccess.getTestResult(this.sessionid).subscribe(
                data => {
                    if(data!=null)
                    {
                        this.testResult=data;
                       console.log(this.testResult.total_questions);
                    }         
                }
            );
    }
}

