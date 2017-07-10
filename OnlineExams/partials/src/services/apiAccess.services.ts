import { Http,Headers,RequestOptions,Response }    from '@angular/http';
import {Injectable} from '@angular/core';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';
import {Subject, Test,Question,AnswerOption,Answer} from '../models/all.model';

@Injectable()
export class ApiAccess{
  public url:string;
  _http:Http;
  constructor(http:Http){
    this._http=http;
  }
  getSubjects() {
        return this._http.get(this.url+"/subjects.php")
        .map(data => {
            data.json();
            return data.json();
       });
    }
  getTests(subid:number) {
        return this._http.get(this.url+"/tests.php?subid="+subid)
        .map(data => {
            data.json();
            return data.json();
       });
    }
    getTestDetails(testid:number){
       return this._http.get(this.url+"/tests.php?testid="+testid)
        .map(data => {
            data.json();
            return data.json();
       });
    }

  getQuestion(testid:number,qid:number){
    return this._http.get(this.url+"/question.php?testid="+testid+"&qid="+qid)
        .map(data => {
            data.json();
            return data.json();
       });
  }
  updateAnswerSheet(sessionid:string,subjectid:number,testid:number,answers:Array<Answer>):any
  {
     var answersheet={
       sessionid:sessionid,
       subjectid:subjectid,
       testid:testid,
       answers:answers
     };
      let headers = new Headers();
      headers.append('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
      let options = new RequestOptions({ headers: headers });
      let body=JSON.stringify(answersheet);
      return this._http.post(this.url+"/answers.php", 'answersheet='+body, options ).subscribe(res => {
              // console.log('post result %o', res);
        });
  }
  getTestResult(sessionid:string){
    return this._http.get(this.url+"/results.php?sessionid="+sessionid)
        .map(data => {
            data.json();
            return data.json();
       });
  }
}