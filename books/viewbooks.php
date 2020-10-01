<?php include '../includes/header.php'; ?>
<style>
    .cards {
        padding: 3px;
        min-width: 400px;
        max-width: inherit;
        min-height:300px ;
        max-height: inherit;
        /* height: inherit; */
        background: white;
        /* margin: 1px; */
        border: 1px solid white;
        box-shadow: 3px 3px 3px 3px silver;

    }

    .cards:hover {
        cursor: pointer;
        box-shadow: 5px 5px 5px 5px #888888;
        /* background: whitesmoke; */
    }

    @media(max-width:749px) {

        .arrange {
            display: grid;
            padding: 2px;
            margin: 2px;
            grid-gap: 1em;
        }

        .cards {
            padding: 3px;
            min-width: 400px;
            max-width: inherit;
            min-height: 300px;
            max-height: inherit;
            background: white;
            /* margin: 1px; */
            border: 1px solid white;
            box-shadow: 3px 3px 3px 3px silver;

        }
    }

    @media(min-width:750px) {
        .cards {
            padding: 4px;
            min-width: 320px;
            max-width: inherit;
            min-height: 300px;
            max-height: inherit;
            background: white;
            /* margin: 1px; */
            border: 1px solid white;
            box-shadow: 3px 3px 3px 3px silver;

        }

        .arrange {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            padding: 10px;
            margin: 2px;
            grid-gap: 1em;
        }
    }
</style>
</head>

<body>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <p align="center" class="h4 p-2">
        Books Created
    </p>
    <hr>


    <div class=" arrange">


        <!-- <a href="../notes/createnotes.php?bid=' . $row['b_id'] . '" class="ml-5" style="font-size:18px;font-family:arial;border-radius:20px;"> -->

        <?php

        include '../includes/dbh.php';

        $sql = "SELECT * FROM books order by on_date desc";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) < 1) echo 'No books created!';
        else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                            <div class="cards m-auto " >
                <h5 class="text-center m-2 p-1 text-secondary" ><a style="text-decoration:none" class="text-dark" href="../notes/viewnotes.php?bid=' . $row['b_id'] . '">' . $row['title'] . '</a>
                <a href="../notes/createnotes.php?bid=' . $row['b_id'] . '"  style="font-size:18px;font-family:arial;border-radius:20px;">
                
                <svg  width="1em" height="1em" viewBox="0 0 16 16" class="m-1 bi bi-pencil-fill ml-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                </svg>
                </a>
                </h5>
                <br>
                <p class="m-3 text-dark mt-auto text-center p-2"  style="font-family:arial;color:white;font-size:12px;">' . $row['description'] . '</p>
                <p class="text-center">
                <a href="../notes/viewnotes.php?bid=' . $row['b_id'] . '" class="btn btn-success bg-success ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                </svg>
                VIEW NOTES
                </a>
     
                </p>
                
               
                
                </div>
                ';
            }
        }

        ?>
    </div>
    <a href="" style="display: ;"> </a>


    <?php include '../includes/footer.php'; ?>