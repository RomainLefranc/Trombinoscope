<script>
    $(function () {
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var date = new Date
        var x = date.getHours();
        var msg = "";
        switch (true) {
            case x >= 14 && x <= 18:
                msg = "Bonne après midi";
                break;
            case x < 14:
                msg = "Bonjour";
                break;
            default:
                msg = "Bonsoir";
                break;
        }
        function Twodigits(date) {
            if (date < 10) {
                return "0" + date;
            } else {
                return date
            }
        }
        var heure = `${Twodigits(date.getHours())}:${Twodigits(date.getMinutes())}`
        date = date.toLocaleDateString('fr-FR',options)
        $('.date').html(`${date} et il est ${heure}`)
        $('.msg').html(msg);
    });
</script>