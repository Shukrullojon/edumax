@extends('layouts.admin')

@section('styles')
    <style>
        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
@endsection


@section('content')

    <section class="content">
        <div class="row container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Attendance</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <!-- Data table -->
                        <table>
                            <tr>
                                <td colspan="2">ID #</td>
                                <td colspan="2">Name</td>
                                <td colspan="2">Surname</td>
                                <td colspan="2">Age</td>
                                <td>Teacher</td>
                                <td colspan="3" style="line-height: 15px">1<br>06.05.2024<br>Monday</td>
                                <td colspan="3" style="line-height: 15px">1<br>07.05.2024<br>Tuesday</td>
                                <td colspan="3" style="line-height: 15px">1<br>08.05.2024<br>Wednesday</td>
                                <td colspan="3" style="line-height: 15px">1<br>09.05.2024<br>Thursday</td>
                                <td colspan="3" style="line-height: 15px">1<br>10.05.2024<br>Friday </td>
                                <td colspan="3" style="line-height: 15px">1<br>11.05.2024<br>Saturday</td>
                                <td colspan="3" style="line-height: 15px">2<br>13.05.2024<br>Monday</td>
                                <td colspan="3" style="line-height: 15px">2<br>14.05.2024<br>Tuesday</td>
                                <td colspan="3" style="line-height: 15px">2<br>15.05.2024<br>Wednesday</td>
                                <td colspan="3" style="line-height: 15px">2<br>16.05.2024<br>Thursday</td>
                                <td colspan="3" style="line-height: 15px">2<br>17.05.2024<br>Friday </td>
                                <td colspan="3" style="line-height: 15px">2<br>18.05.2024<br>Saturday</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Cource</td>
                                <td>Level</td>
                                <td>Day</td>
                                <td>Time</td>
                                <td>Lang</td>
                                <td>Direct</td>
                                <td>Teacher</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>S0101</td>
                                <td>3 month</td>
                                <td>1-2</td>
                                <td>Every</td>
                                <td style="font-size: 10px">13:00-14:00</td>
                                <td>uz</td>
                                <td>speaking</td>
                                <td>Plan<hr style="margin: 0">Fakt</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                            </tr>
                            <tr>
                                <td colspan="2">1</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">2</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">3</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">4</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">5</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <tr>
                                <td colspan="2">ID #</td>
                                <td colspan="2">Name</td>
                                <td colspan="2">Surname</td>
                                <td colspan="2">Age</td>
                                <td>Teacher</td>
                                <td colspan="3" style="line-height: 15px">1<br>06.05.2024<br>Monday</td>
                                <td colspan="3" style="line-height: 15px">1<br>07.05.2024<br>Tuesday</td>
                                <td colspan="3" style="line-height: 15px">1<br>08.05.2024<br>Wednesday</td>
                                <td colspan="3" style="line-height: 15px">1<br>09.05.2024<br>Thursday</td>
                                <td colspan="3" style="line-height: 15px">1<br>10.05.2024<br>Friday </td>
                                <td colspan="3" style="line-height: 15px">1<br>11.05.2024<br>Saturday</td>
                                <td colspan="3" style="line-height: 15px">2<br>13.05.2024<br>Monday</td>
                                <td colspan="3" style="line-height: 15px">2<br>14.05.2024<br>Tuesday</td>
                                <td colspan="3" style="line-height: 15px">2<br>15.05.2024<br>Wednesday</td>
                                <td colspan="3" style="line-height: 15px">2<br>16.05.2024<br>Thursday</td>
                                <td colspan="3" style="line-height: 15px">2<br>17.05.2024<br>Friday </td>
                                <td colspan="3" style="line-height: 15px">2<br>18.05.2024<br>Saturday</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Cource</td>
                                <td>Level</td>
                                <td>Day</td>
                                <td>Time</td>
                                <td>Lang</td>
                                <td>Direct</td>
                                <td>Teacher</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                                <td style="writing-mode: vertical-lr">Att</td>
                                <td style="writing-mode: vertical-lr">Hom</td>
                                <td style="writing-mode: vertical-lr">Ball</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>S0102</td>
                                <td>IELTS</td>
                                <td>5-6</td>
                                <td>Every</td>
                                <td style="font-size: 10px">13:00-14:00</td>
                                <td>uz</td>
                                <td>speaking</td>
                                <td>Plan<hr style="margin: 0">Fakt</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                                <td colspan="3">F.Ahmad<hr style="margin: 0">F.Ahmad</td>
                            </tr>
                            <tr>
                                <td colspan="2">1</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">2</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">3</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">4</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">5</td>
                                <td colspan="2">Yahyo</td>
                                <td colspan="2">Baxtiyorov</td>
                                <td colspan="2">20</td>
                                <td></td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="attendance" >
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">➖</option>
                                        <option value="3">➕</option>
                                        <option value="5">🟡</option>
                                        <option value="4">✔️</option>
                                        <option value="-1">❌️</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="homework">
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="4">❕</option>
                                        <option value="0">➖</option>
                                        <option value="3">🟡</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="my_select_class" name="ball">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="3">️❤️</option>
                                        <option value="1">1</option>
                                        <option value="-1">◼️</option>
                                    </select>
                                </td>
                            </tr>
                        </table>

                        <div class="modal fade" id="department_filter">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Фильтр</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['method'=>'GET']) !!}
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Название:</strong>
                                                    {!! Form::text('name', request()->get('name'), ['placeholder' => 'Название','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрывать</button>
                                        <button type="submit" class="btn btn-primary">Фильтр</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
