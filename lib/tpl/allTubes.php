
<ul class="breadcrumb lead">
    <li><a href="/">Home</a> <span class="divider">/</span></li>
    <li><a href="?server=<?php echo $server?>">Server &laquo;<?php echo $server?>&raquo;</a> <span class="divider">/</span></li>
    <li class="active">Tubes</li>
</ul>

<section id="summaryTable">
  <table class="table table-bordered table-striped">
    <thead>
        <tr>
        <?php foreach(reset($tubesStats) as $item):?>
            <th title="<?php echo $item['descr']?>"><?php echo $item['key']?></th>
        <?php endforeach;?>
        </tr>
    </thead>
    <tbody>
    <?php foreach($tubesStats as $row):?>
        <tr id="tube_<?php echo $row[0]['value']?>">
        <?php foreach($row as $item):?>
            <?php if($item['key']=='name'):?>
                <td><a href="?server=<?php echo $server?>&tube=<?php echo $item['value']?>"><?php echo $item['value']?></a></td>
            <?php else:?>
                <td><?php echo $item['value']?></td>
            <?php endif?>
        <?php endforeach;?>
        </tr>
    <?php endforeach?>
    </tbody>
  </table>
</section>
