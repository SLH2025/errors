<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daily Sale Report PF</title>
    <style>
        * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        .container {

            margin: 10px;
            border: 2px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 12px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
        }

        .no-border {
            border: none;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">


        {{-- <h3 style="text-align:center;">DAILY SALE REPORT PF</h3> --}}
        <table>
            <tr>
                <td>DAILY SALE REPORT PF</td>
                <td colspan="3" class="no-border">L-14A SHOP NAME ..............................................</td>
                <td colspan="2" class="no-border">NO. ...................</td>
                <td colspan="3" class="no-border">DATE ...........................</td>
                <td colspan="5" class="no-border" style="text-align:right;">जय श्री नैना देवी | <br>जय माता देवी |
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <th rowspan="2">BRAND</th>
                <th colspan="3">OPENING BALANCE</th>
                <th colspan="3">RECEIPT</th>
                <th colspan="3">TRANSFER</th>
                <th colspan="3">TOTAL</th>
                <th colspan="3">CLOSING BALANCE</th>
                <th colspan="3">SALE</th>
                <th colspan="3">RATE</th>
                <th colspan="3">AMOUNT</th>
                <th rowspan="2">TOTAL
                    <hr> <br> Amount Rs.
                </th>
            </tr>
            <tr>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
                <th>Q</th>
                <th>P</th>
                <th>N</th>
            </tr>

            <!-- Sample Rows -->
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="3"></td>
                </tr>
            @endforeach
            {{-- <tr>
                <td>MALWA</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>SANTRA</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>SONFIA</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>VODKA</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr> --}}
            <tr>
                <td class="bold">TOTAL</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>65° RUM</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>75° RUM</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td class="bold">G. TOTAL</td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="3"></td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">EXPENSES</th>
                <th colspan="2">LESS</th>
                <th colspan="2">PML Sale</th>
            </tr>
            <tr>
                <td colspan="2" rowspan="8"></td>
                <td colspan="2" rowspan="8"></td>
                <td>Ahata</td>
                <td></td>
            </tr>
            <tr>
                <td>Panwari</td>
                <td>....</td>
            </tr>
            <tr>
                <td>Diff.</td>
                <td></td>
            </tr>
            <tr>
                <td>Fine</td>
                <td></td>
            </tr>
            <tr>
                <td>Total</td>
                <td></td>
            </tr>
            <tr>
                <td>Exp.</td>
                <td></td>
            </tr>
            <tr>
                <td>Less</td>
                <td></td>
            </tr>
            <tr>
                <td>Net Sale</td>
                <td></td>
            </tr>


        </table>

        <p style="margin-left:5px;">Sales Man Signature: 1..............................
            2..............................
        </p>

    </div>



</body>

</html>
