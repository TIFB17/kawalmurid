<table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th><center>Id Hadir</center></th>
                                                    <th><center>Nis</center></th>
                                                    <th><center>Tanggal</center></th>
                                                    <th><center>Id Pelajaran</center></th>
                                                    <th><center>Nip</center></th>
                                                    <th><center>Id Kelas</center></th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($kehadiran as $jd) {?>
                                                <tr>
                                                    <td><center><?php echo $jd->id_hadir; ?></center></td>
                                                    <td><center><?php echo $jd->nis; ?></center></td>
                                                    <td><center><?php echo $jd->tanggal; ?></center></td>
                                                    <td><center><?php echo $jd->id_pelajaran; ?></center></td>
                                                    <td><center><?php echo $jd->nip; ?></center></td>
                                                    <td><center><?php echo $jd->id_kelas; ?></center></td>
                                                    <td><center><button class="btn btn-success" type="button">
                                                        <i class="fa fa-edit"> Edit</i></button>
                                                    <button> <a href="<?php echo site_url('admin/Absen/hapus/'.$jd->id_hadir);?>">Hapus  
</button>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>