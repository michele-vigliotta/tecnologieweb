<script>
                        const locCheck = document.getElementById('locationType')
                        locCheck.addEventListener('change', (event) => {
                            if (event.currentTarget.checked) {
                                document.getElementById("loca").disabled = false;
                            } else {
                                document.getElementById("loca").disabled = true;
                            }
                        })
                    </script>
                    <script>
                        const dateCheck = document.getElementById('dateCheck')
                        dateCheck.addEventListener('change', (event) => {
                            if (event.currentTarget.checked) {
                                document.getElementById("startDate").disabled = false;
                                document.getElementById("endDate").disabled = false;
                            } else {
                                document.getElementById("startDate").disabled = true;
                                document.getElementById("endDate").disabled = true;
                            }
                        })

                    </script>
