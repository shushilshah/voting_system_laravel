<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 class='text-white bg-primary p-3 text-center'>Utilize your vote for the development of Nation</h1>
    <div class='container mt-5'>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>s.n.</th>
                    <th>Name of Candidate</th>
                    <th>Associated Party</th>
                    <th>Vote</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src='can-1.jpg' class="rounded-circle circle-image"
                            style="width:100px;height:100px;object-fit:cover;">
                    </td>
                    <td>Shushil Shah</td>
                    <td>A</td>
                    <td>
                        <button class='btn btn-success' onclick="increaseVote('shushil',this)"
                            name='vote'>vote</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='can-2.jpg' class="rounded-circle circle-image"
                            style="width:100px;height:100px;object-fit:cover;">
                    </td>
                    <td>Anil Shah</td>
                    <td>B</td>
                    <td>
                        <button class='btn btn-success' onclick="increaseVote('anil',this)" name='vote'>vote</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='can-3.jpg' class="rounded-circle circle-image"
                            style="width:100px;height:100px;object-fit:cover;">
                    </td>
                    <td>Santosh Shah</td>
                    <td>C</td>
                    <td>
                        <button class="btn btn-success" onclick="increaseVote('santosh',this)"
                            name='vote'>vote</button>
                    </td>
                </tr>
            </tbody>


        </table>
        <a href='{{ url('/result') }}'>
            <button class='btn btn-primary'>View Total Votes</button>
        </a>
    </div>

    <script>
        if (!localStorage.getItem('votes')) {
            localStorage.setItem('votes', JSON.stringfy({
                shushil: 0,
                anil: 0,
                santosh: 0
            }))
        }

        function increaseVote(candidate) {
            const votes = JSON.parse(localStorage.getItem('votes'));
            votes[candidate]++;
            localStorage.setItem('votes', JSON.stringfy(votes));
            alert('Thank you for voting');
        }
    </script>

</body>

</html>
