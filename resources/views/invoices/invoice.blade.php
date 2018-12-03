<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
    @font-face {
        font-family: IRANSans;
        font-style: normal;
        font-weight: 400;
        src: url(/css/fonts/IRANSansWeb.ttf) format('true-type');
    }
    td {
        border-bottom: 1px solid #ddd;
        margin: 5px;
    }
</style>
<body>
<div>
    <div style="float: left;">
        <p>My Company<br/>
            My street address,<br/>
            Contact: email@mycompany.com
        </p>
    </div>
    <div style="float: right">
        <img style="width: 250px" src="{{ public_path('img\avatar.jpg') }}">
    </div>
</div>
<div>
    <div style="text-align: center; padding-top: 130px;">
        <h1>RECEIPT</h1>
    </div>
</div>
<div>
    <div style="float: right">
        <p>Receipt for<br/>
            Rhys Hall<br/>
            hello@pinecode.io<br/>
        </p>
    </div>
    <div style="text-align: right">
        <p><br/>
            3rd May 2018<br/>
            Account ID: 12345
        </p>
    </div>
</div>
<div>
    <table cellspacing="0">
        <thead style="background-color: #eeeeee; border: none;">
        <tr style="font-family: IRANSans">
            <th style="font-family: IRANSans" width="120px" height="35px" style="margin: 5px">تاریخ</th>
            <th width="220px">توضیحات</th>
            <th width="260px">روش پرداخت</th>
            <th width="118px">مبلغ کل</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td height="45px">03/05/2018</td>
            <td>Moneys for services</td>
            <td>Mastercard **** **** **** 1234</td>
            <td>$55.00</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>