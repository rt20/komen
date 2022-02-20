<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Komentar</title>
</head>

<body>
    <div class="container mt-4 mb-4">
        <div class="card"
            style="border-radius: 12px;box-shadow: 0 1px 5px rgb(0, 0, 0, 0.2);background-color: rgba(243, 243, 243, 0.445);border: none;">
            <div class="card-body">
                <h6 style="color: rgb(145, 61, 75);text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope-open" viewBox="0 0 16 16" style="margin-top: -0.2rem;">
                        <path
                            d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                    </svg>
                    <b>{{ $commentcount }} Ucapan</b>
                </h6>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <div class="alert alert-success text-center" role="alert"
                            style="width: 7rem;font-size: 12px;border: none;">
                            <b>
                                <p style="margin-top: -0.5rem;margin-bottom: -0.2rem;">{{ $hadir }}</p>
                                <p style="margin-bottom: -0.5rem;">Hadir</p>
                            </b>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="alert alert-danger text-center" role="alert"
                            style="width: 7rem;margin-left: 1rem;margin-right: 1rem;font-size: 12px;border: none;">
                            <b>
                                <p style="margin-top: -0.5rem;margin-bottom: -0.2rem;">{{ $tidakhadir }}</p>
                                <p style="margin-bottom: -0.5rem;">Tidak Hadir</p>
                            </b>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="alert alert-secondary text-center" role="alert"
                            style="width: 7rem;font-size: 12px;border: none;">
                            <b>
                                <p style="margin-top: -0.5rem;margin-bottom: -0.2rem;">{{ $ragu }}</p>
                                <p style="margin-bottom: -0.5rem;">Ragu</p>
                            </b>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="w-full" action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <hr style="margin-top: -1rem;">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Pesan"></textarea>
                    </div>
                    <select class="form-select" name="kehadiran" aria-label="Default select example">
                        <option selected>Pilih Konfirmasi Kehadiran :</option>
                        <option value="hadir">Hadir</option>
                        <option value="tidak hadir">Tidak Hadir</option>
                        <option value="ragu">Masih Ragu</option>
                    </select>
                    <button type="submit" class="btn btn-dark" href="#" role="button"
                        style="margin-top: 2rem;background-color: rgb(145, 61, 75);border: none;width: 15rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16" style="margin-top: -0.2rem;">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                        Kirim
                    </button>
            </form>
        </div>
        <hr>
        <div class="card-body" style="padding: 2rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: -2rem;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <div style="margin-top: -3.5rem;margin-left: 4rem;">
                <small style="color: rgb(0, 0, 0);">
                    User 1
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-patch-check-fill" viewBox="0 0 16 16" style="margin-top: -0.2rem;color: green;">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                    </svg>
                </small><br>
                <small style="font-size: 12px;color: rgb(150, 150, 150);">03/02/2022 09:34</small><br>
                <small>Hadir</small><br>
                <a href="#" style="text-decoration: none;color: brown;font-size: 11px;">Reply</a>
                <a href="#" style="text-decoration: none;color: brown;font-size: 11px;margin-left: 0.5rem;">Delete</a>
            </div>
        </div>
        <hr style="margin-top: -1rem;">
        <div class="card-body" style="padding: 2rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: -2rem;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <div style="margin-top: -3.5rem;margin-left: 4rem;">
                <small style="color: rgb(0, 0, 0);">
                    User 2
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-circle-fill" viewBox="0 0 16 16"
                        style="margin-top: -0.2rem;color: rgb(128, 0, 0);">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                    </svg>
                </small><br>
                <small style="font-size: 12px;color: rgb(150, 150, 150);">03/02/2022 09:34</small><br>
                <small>Maaf, aku tidak bisa hadir</small><br>
                <a href="#" style="text-decoration: none;color: brown;font-size: 11px;">Reply</a>
                <a href="#" style="text-decoration: none;color: brown;font-size: 11px;margin-left: 0.5rem;">Delete</a>
            </div>
        </div>
        <hr style="margin-top: -1rem;">
        <div class="card-body" style="padding: 2rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: -2rem;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <div style="margin-top: -3.5rem;margin-left: 4rem;">
                <small style="color: rgb(0, 0, 0);">
                    User 3
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-patch-question-fill" viewBox="0 0 16 16"
                        style="margin-top: -0.2rem;color: rgb(66, 66, 66);">
                        <path
                            d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                    </svg>
                </small><br>
                <small style="font-size: 12px;color: rgb(150, 150, 150);">03/02/2022 09:34</small><br>
                <small>Aku belum tau bisa atau enggak</small><br>
                <a href="#" style="text-decoration: none;color: brown;font-size: 11px;">Reply</a>
                <a href="#" style="text-decoration: none;color: brown;font-size: 11px;margin-left: 0.5rem;">Delete</a>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>