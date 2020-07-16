<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance contract</title>
</head>
<body>
    <center>
        <h2>Employment Contract (Part-time work)</h2>
        </center>
        <br>
        <p>
            This contract of employment is entered into between <i>    {{$contract->ep_name}} </i>  (hereinafter
            referred to as ‘Employer’) and     <i> {{$contract->em_name}} </i>    (hereinafter referred to as ‘Employee’)
            on <b>   {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($contract->created_at))) !!} </b>       under the terms and conditions of employment below :
        </p>
        <p>
            <b>1- Commencement:</b><br/>
            Effective from {{$contract->from}}<br/>
            @if ($contract->break_partie === 1)
                .X. until ither party terminates the contract<br/>
            @else
                ... until ither party terminates the contract<br/>
            @endif
            @if ($contract->fixed_periode === 1)
                .X. for a fixed term contract for a period of     {{$contract->fixed_periode_of}}     * day(s) /week(s) / month(s)/ year(s),<br>
            @else
                ... for a fixed term contract for a period of         * day(s) /week(s) / month(s)/ year(s),<br>
            @endif
            ending on   {{$contract->to}}.
        </p>
        <p>
            <b>2- Probation Period : </b>  {{$contract->pb_periode}}    * day(s) / week(s)/ month(s)
        </p>
        <p>
            <b>3- Place of work : </b>  {{$contract->place}}
        </p>
        <p>
            <b>4- Job duty : </b><br/>  {{$contract->job_duty}}
        </p>
        <p>
            <b>5- Wages : </b> Basic wages of $ {{$contract->wage}}     per * day(s) / week(s)/ month(s)
        </p>
        <br/><br/>
        <p>
            <b>Remarks</b><br/>
            1.    This sample is drafted with reference to the Sample Employment Contract of Labour Department for continuous contract of employment by the same employer for four weeks or more, with at least 18 hours worked in each week.
            <br/>2.    The Employment Ordinance is the main piece of legislation governing conditions of employment in Hong Kong. Employers and employees are free to negotiate and agree on the terms and conditions of the employment provided that they do not violate the provisions of the Employment Ordinance. Any term of the employment contract which purports to extinguish or reduce any right, benefit or protection conferred upon the employee by this Ordinance shall be void.
            <br/>3.    According to the Minimum Wage Ordinance, statutory minimum wage (SMW) is expressed as an hourly rate. In essence, wages payable to an employee in respect of any wage period should be no less than the SMW rate on average for the total number of hours worked.
            <br/>4.    An employer must be in possession of a valid insurance policy to cover his liabilities both under the Employees' Compensation Ordinance and at common law for the work injuries for his employees. The Employees' Compensation Ordinance applies to both full-time and part-time employees who are employed under contracts of service.
            <br/>5.    For any specific job requirements, an employer should negotiate with his employee and state clearly in the employment contract.
        </p>
        <div style="margin-top:10px">
            <div style="float:left">
                Signature of Employee : <br/><br/><br/><br/>
                Name in full : {{$contract->em_name}}<br/>
                ID: {{$contract->em_id}}<br/>
                Date :     {{$contract->sig_date_em}}<br/>
            </div>
            <div  style="float:right">
                Signature of Employer or Employer’s Representative :<br/><br/><br/><br/>
                Name in full : {{$contract->ep_name}}<br/>
                Date :    {{$contract->sig_date_ep}}<br/>
            </div>
        </div>
</body>
</html>