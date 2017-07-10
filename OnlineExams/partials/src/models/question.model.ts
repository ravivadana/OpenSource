
import {AnswerOption} from '../models/answeroption.model';
export class Question{
    id:number;
    text:string;
    answeroptions: AnswerOption[];
    correctAnswer:AnswerOption;
    selectedAnswerId:number;
    marked:boolean;
}