<x-templates.depan>
    <x-slot name="appname">Kalender Akademik Program Studi Teknik Informatika Universitas Pahlawan Tuanku Tambusai
    </x-slot>
    <x-slot name="title">KALENDER AKADEMIK</x-slot>
    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1200px;
            margin: 0 auto;
        }

        a {
            color: black
        }
    </style>


    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-kalender-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-kalender" type="button" role="tab"
                                aria-controls="pills-kalender" aria-selected="true">Kalender</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-table-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-table" type="button" role="tab" aria-controls="pills-table"
                                aria-selected="false">Table</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-kalender" role="tabpanel"
                            aria-labelledby="pills-kaleder-tab">
                            <div id='calendar'></div>
                        </div>
                        <div class="tab-pane fade" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Jadwal Kegiatan</th>
                                        <th scope="col">Ket</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($kalenderakademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>
                                                <p> {{ $item->title }} </p>

                                            </td>

                                            <td>
                                                {{ $item->start }} s/d {{ $item->end }}

                                            </td>

                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->
    <script src="{{ asset('fullcalendar/dist/index.global.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'multiMonthYear,dayGridMonth'
                },
                initialView: 'multiMonthYear',
                initialDate: '2023-07-01',
                editable: true,
                selectable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                // multiMonthMaxColumns: 1, // guarantee single column
                // showNonCurrentDates: true,
                // fixedWeekCount: false,
                // businessHours: true,
                // weekends: false,
                events: {!! $kalender !!}
            });

            calendar.render();
        });
    </script>




</x-templates.depan>
