<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bussiness</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<body>
    {{ $slot }}

    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
                currentSidebarTab: null,
                isSettingsPanelOpen: false,
                isSubHeaderOpen: false,
                watchScreen() {
                if (window.innerWidth <= 1024) {
                    this.isSidebarOpen = false
                }
                },
            }
        }
    </script>
</body>
</html>
