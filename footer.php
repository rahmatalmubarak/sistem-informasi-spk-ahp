<footer class="text-center">&copy; 2024 | Penerimaan beasiswa PPA UIN Imam Bonjol Padang</footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.toastmessage.js"></script>
<script>
    $(document).ready(function() {

        $('#tabeldata').DataTable();

    });

    function showSuccessToast() {
        $().toastmessage('showSuccessToast', "Data telah dihapus");
    }

    function showStickySuccessToast() {
        $().toastmessage('showToast', {
            text: 'Sukses, Tambah lagi',
            sticky: true,
            position: 'top-right',
            type: 'success',
            closeText: '',
            close: function() {
                console.log("toast is closed ...");
            }
        });

    }

    function showNoticeToast() {
        $().toastmessage('showNoticeToast', "Kami telah menentukan nilai yang boleh diinput");
    }

    function showStickyNoticeToast() {
        $().toastmessage('showToast', {
            text: 'Kami telah menentukan nilai yang boleh diinput',
            sticky: true,
            position: 'top-right',
            type: 'notice',
            closeText: '',
            close: function() {
                console.log("toast is closed ...");
            }
        });
    }

    function showWarningToast() {
        $().toastmessage('showWarningToast', "Peringatan, password anda masukkan salah");
    }

    function showStickyWarningToast() {
        $().toastmessage('showToast', {
            text: 'Peringatan, password anda masukkan salah',
            sticky: true,
            position: 'top-right',
            type: 'warning',
            closeText: '',
            close: function() {
                console.log("toast is closed ...");
            }
        });
    }

    function showErrorToast() {
        $().toastmessage('showErrorToast', "Data gagal dihapus, (hapus dulu data yang terkait pada menu lainnya)");
    }

    function showStickyErrorToast() {
        $().toastmessage('showToast', {
            text: 'Gagal total! Coba lagi',
            sticky: true,
            position: 'top-right',
            type: 'error',
            closeText: '',
            close: function() {
                console.log("toast is closed ...");
            }
        });
    }

    function showStickyErrorInputToast() {
        $().toastmessage('showToast', {
            text: 'Gagal! Data tidak lengkap',
            sticky: true,
            position: 'top-right',
            type: 'error',
            closeText: '',
            close: function() {
                console.log("toast is closed ...");
            }
        });
    }
    $('#select-all').click(function(event) {
        if (this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });
    $('#select-all2').click(function(event) {
        if (this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });
    $(document).ready(function() {
        url = window.location.href;
        url = url.split('/');
        url[4] = 'get-data-kriteria.php?responden=' + $('#kriteria_responden').val();
        url_kriteria = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4];

        url[4] = 'analisa-kriteria-tabel.php?responden=' + $('#kriteria_responden').val();
        url_hasil = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]
        $('#hasil_kriteria').prop("href", url_hasil)

        url[4] = 'analisa-alternatif-tabel.php?responden=' + $('#alternatif_responden').val() + '&kriteria=' + $('#kriteria').val();
        url_hasil = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]
        $('#hasil_alternatif').prop("href", url_hasil)
        if (window.location.pathname.includes('analisa-kriteria')) {
            $.ajax({
                url: url_kriteria,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(response) {
                    for (let index = 0; index < response.length; index++) {
                        const element = response[index];
                        $('#nl' + response[index].kriteria_pertama + response[index].kriteria_kedua + response[index].nilai_analisa_kriteria.split('.').join('')).prop("checked", true);
                    }
                }
            })
        }
        $('#kriteria_responden').change(function() {
            url = window.location.href;
            url = url.split('/');
            url[4] = 'get-data-kriteria.php?responden=' + $('#kriteria_responden').val();
            url_kriteria = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4];

            url[4] = 'analisa-kriteria-tabel.php?responden=' + $('#kriteria_responden').val();
            url_hasil = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]
            $('#hasil_kriteria').prop("href", url_hasil)

            if (window.location.pathname.includes('analisa-kriteria')) {
                $.ajax({
                    url: url_kriteria,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(response) {
                        for (let index = 0; index < response.length; index++) {
                            const element = response[index];
                            $('#nl' + response[index].kriteria_pertama + response[index].kriteria_kedua + response[index].nilai_analisa_kriteria.split('.').join('')).prop("checked", true);
                        }
                    }
                })
            }
        })
    });

    $(document).ready(function() {
        url = window.location.href;
        url = url.split('/');
        url[4] = 'get-data-alternatif.php?responden=' + $('#alternatif_responden').val() + '&kriteria=' + $('#kriteria').val();
        url = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]
        if (window.location.pathname.includes('analisa-alternatif')) {
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(response) {
                    for (let index = 0; index < response.length; index++) {
                        const element = response[index];
                        $('#nl' + response[index].alternatif_pertama + response[index].alternatif_kedua + response[index].nilai_analisa_alternatif.split('.').join('')).prop("checked", true);
                    }
                }
            })
        }
        $('#alternatif_responden').change(function() {
            url = window.location.href;
            url = url.split('/');
            url[4] = 'get-data-alternatif.php?responden=' + $('#alternatif_responden').val() + '&kriteria=' + $('#kriteria').val();
            url_alternatif = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]

            url[4] = 'analisa-alternatif-tabel.php?responden=' + $('#alternatif_responden').val() + '&kriteria=' + $('#kriteria').val();
            url_hasil = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]
            $('#hasil_alternatif').prop("href", url_hasil)
            if (window.location.pathname.includes('analisa-alternatif')) {
                $.ajax({
                    url: url_alternatif,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(response) {
                        for (let index = 0; index < response.length; index++) {
                            const element = response[index];
                            $('#nl' + response[index].alternatif_pertama + response[index].alternatif_kedua + response[index].nilai_analisa_alternatif.split('.').join('')).prop("checked", true);
                        }
                    }
                })
            }
        })
        $('#kriteria').change(function() {
            url = window.location.href;
            url = url.split('/');
            url[4] = 'get-data-alternatif.php?responden=' + $('#alternatif_responden').val() + '&kriteria=' + $('#kriteria').val();
            url_alternatif = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]

            url[4] = 'analisa-alternatif-tabel.php?responden=' + $('#alternatif_responden').val() + '&kriteria=' + $('#kriteria').val();
            url_hasil = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4]
            $('#hasil_alternatif').prop("href", url_hasil)
            if (window.location.pathname.includes('analisa-alternatif')) {
                $.ajax({
                    url: url_alternatif,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(response) {
                        for (let index = 0; index < response.length; index++) {
                            const element = response[index];
                            $('#nl' + response[index].alternatif_pertama + response[index].alternatif_kedua + response[index].nilai_analisa_alternatif.split('.').join('')).prop("checked", true);
                        }
                    }
                })
            }
        });
        showHasilKriteriaButton();
        showHasilAlternatifButton();
    })

    $('#form_kriteria').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response == 'true') {
                    showHasilKriteriaButton();
                    showStickySuccessToast();
                    // window.location.reload();
                } else {
                    showStickyErrorInputToast();
                }
            }
        })
    })

    $('#form_alternatif').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                console.log(response);
                if (response == 'true') {
                    showHasilKriteriaButton();
                    showStickySuccessToast();
                    // window.location.reload();
                } else {
                    showStickyErrorInputToast();
                }
            }
        })
    })

    function showHasilKriteriaButton() {
        $(document).ready(function() {
            $('#hasil_kriteria').hide();
            if (window.location.pathname.includes('analisa-kriteria')) {
                url = window.location.href;
                url = url.split('/');
                url[4] = 'check-analisa-kriteria.php';
                url = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4];
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(response) {
                        if (response.status == true) {
                            $('#hasil_kriteria').show();
                        }
                    }
                });
            }
        })
    }

    function showHasilAlternatifButton() {
        $(document).ready(function() {
            $('#hasil_alternatif').hide();
            if (window.location.pathname.includes('analisa-alternatif')) {
                url = window.location.href;
                url = url.split('/');
                url[4] = 'check-analisa-alternatif.php';
                url = url[0] + '/' + url[1] + '/' + url[2] + '/' + url[3] + '/' + url[4];
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(response) {

                        if (response.status == true) {
                            $('#hasil_alternatif').show();
                        }
                    }
                });
            }
        })
    }
</script>
</body>

</html>