<div class="container">
    <div class="content">
        <h1>App Looping (laravel) </h1>
        <form action="/looping/proses" method="post">
              {{ csrf_field() }}
        <table>
            <tr>
                <td>Jumlah Perulangan</td>
                <td>
                    <input type="text" name="angka1">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Jumlahkan hasil"></td>
            </tr>                                       
        </table>
    </form>
</div>