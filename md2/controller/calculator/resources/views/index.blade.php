@extends('layouts.master')
@section('content')
    <fieldset style="width: 180px; height: 130px;">
        <table>
                <tr>
                    <input type="text" name="disp" id="disp" disabled>
                </tr>
                <tbody>

                <tr>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="1" value=1> 1</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="2" value=2>2</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="3" value=3>3</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="add" value="+">+</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="4" value=4>4</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="5" value=5>5</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="6" value=6>6</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="sub" value="-">-</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="7" value=7>7</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="8" value=8>8</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="9" value=9>9</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="mul" value="x">x</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" onclick="disp.value = null " id="c">C</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="0" value=0> 0</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="equal"> =</button>
                    </td>
                    <td>
                        <button type="button" onclick="disp.value += this.value" id="div" value="/"> /</button>
                    </td>
                </tr>
                </tbody>

        </table>
    </fieldset>

@endsection
