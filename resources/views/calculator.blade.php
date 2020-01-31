<h1>Calculator</h1>
<form action="{{route('cal')}}" method="post">
    @csrf
    <table>
        <tr>
            <td colspan="5">
                <input type="text" id="result" name="result" value="{{$p??''}}" >
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" value=7 onclick="showResult(7)">
            </td>
            <td>
                <input type="button" value=8 onclick="showResult(8)">
            </td>
            <td>
                <input type="button" value=9 onclick="showResult(9)">
            </td>
            <td>
                <input type="button" value="/" onclick="showResult('/')">
            </td>
            <td>
                <input type="button" value="CE" onclick="clearResult()">
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" value=4 onclick="showResult(4)">
            </td>
            <td>
                <input type="button" value=5 onclick="showResult(5)">
            </td>
            <td>
                <input type="button" value=6 onclick="showResult(6)">
            </td>
            <td>
                <input type="button" value="*" onclick="showResult('*')">
            </td>
            <td>
                <input type="button" value="C" onclick="backSpace()">
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" value=1 onclick="showResult(1)">
            </td>
            <td>
                <input type="button" value=2 onclick="showResult(2)">
            </td>
            <td>
                <input type="button" value=3 onclick="showResult(3)">
            </td>
            <td>
                <input type="button" value="-" onclick="showResult('-')">
            </td>
            <td rowspan="2">
                <input type="submit" value="=" style="height: 50px">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value=0 style="width: 60px" onclick="showResult(0)">
            </td>
            <td>
                <input type="button" value="." onclick="showResult('.')">
            </td>
            <td>
                <input type="button" value="+" onclick="showResult('+')">
            </td>

        </tr>
    </table>
</form>
<script>
    function showResult(char) {
        document.getElementById('result').value += char;
    }

    function clearResult() {
        document.getElementById('result').value = '';
    }


    function backSpace() {
        document.getElementById('result').value = document.getElementById('result').value.substr(0, document.getElementById('result').value.length - 1);
    }
</script>
