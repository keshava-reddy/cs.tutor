<table id="mt" border="1">
    <?php for($row=1; $row<=$maxRows; $row++): ?>
        <tr>
            <?php for($col=1; $col<=$maxCols; $col++): ?>
                <td><?= $row*$col ?></td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>


<style> #mt { margin-left: 200px; } #mt td { padding: 8px; } </style>
