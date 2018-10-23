<h4>求人情報</h4>
<div class="mce-content-body">
  <table class="recruit-table">
    <tbody>
      <tr>
        <th>案件名</th>
        <td>
          <? $txt = get_field('project_name'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
        <tr>
          <th>勤務地</th>
          <td>
            <? $txt = get_field('project_map'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
        </tr>
        <tr>
          <th>募集職種</th>
          <td>
            <? $txt = get_field('project_job'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
        </tr>
      <tr>
        <th>業務内容</th>
        <td>
          <? $txt = get_field('project_detail'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th>スキル</th>
        <td>
          <? $txt = get_field('project_skill'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th>就業時間</th>
        <td>
          <? $txt = get_field('project_time'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th>条件</th>
        <td>
          <? $txt = get_field('project_condition'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th>その他</th>
        <td>
          <? $txt = get_field('project_etc'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
    </tbody>
  </table>
