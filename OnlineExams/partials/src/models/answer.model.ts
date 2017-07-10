import {AnswerOption} from '../models/answeroption.model';
export class Answer{
    questionid:number;
    questionindex:number;
    answeroption:number;
    answerd:boolean;
    question:string;
    answeroptions:Array<AnswerOption>;
    marked:boolean;
}