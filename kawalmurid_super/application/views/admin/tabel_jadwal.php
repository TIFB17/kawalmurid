<table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>Id Jadwal</th>
                                                    <th>Kelas</th>
                                                    <th>Ruangan</th>
                                                    <th>Tahun Ajaran</th>
                                                    <th>Semester</th>
                                                    <th>Id Pelajaran</th>
                                                    <th>Nama Pelajaran</th>
                                                    <th>Hari</th>
                                                    <th>Jam Mulai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($jadwal as $jd) {?>
                                                <tr>
                                                    <td><?php echo $jd->id_jadwal; ?></td>
                                                    <td><?php echo $jd->kelas; ?></td>
                                                    <td><?php echo $jd->ruangan; ?></td>
                                                    <td><?php echo $jd->tahun_ajaran; ?></td>
                                                    <td><?php echo $jd->semester; ?></td>
                                                    <td><?php echo $jd->id_pelajaran; ?></td>
                                                    <td><?php echo $jd->nama_pelajaran; ?></td>
                                                    <td><?php echo $jd->hari; ?></td>
                                                    <td><?php echo $jd->jam_mulai; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>