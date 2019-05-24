<?php if(get_post_meta($post->ID,'recruit-table',true) == 'company'): ?>
  <table class="recruit-table">
    <tbody>
      <tr>
        <th colspan="2" class="colspan2">会社名</th>
        <td>
          <? $txt = get_field('company-name'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
        <tr>
          <th colspan="2">勤務地</th>
          <td>
            <? $txt = get_field('company-address'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
        </tr>
        <tr>
          <th colspan="2">事業内容</th>
          <td>
            <? $txt = get_field('company-business'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
        </tr>
      <tr>
        <th rowspan="4" colspan="1" class="colspan1">求人概要</th>
          <th colspan="1">募集職種</th>
          <td>
            <? $txt = get_field('company-recruit'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
      </tr>
      <tr>
        <th colspan="1">業務内容</th>
        <td>
          <? $txt = get_field('company-content'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="1">求める能力</th>
        <td>
          <? $txt = get_field('company-skill'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="1">勤務日・勤務時間</th>
        <td>
          <? $txt = get_field('company-schedule'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th rowspan="5" colspan="1">企業情報</th>
          <th colspan="1">本社所在地</th>
          <td>
            <? $txt = get_field('company-office'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
      </tr>
      <tr>
        <th colspan="1">関連業界</th>
        <td>
          <? $txt = get_field('company-industry'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="1">社員数</th>
        <td>
          <? $txt = get_field('company-employee'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="1">設立年月</th>
        <td>
          <? $txt = get_field('company-establish'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="1">創業者</th>
        <td>
          <? $txt = get_field('company-founder'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="2">募集の特徴</th>
        <td>
          <? $txt = get_field('company-character'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
    </tbody>
  </table>
<?php elseif(get_post_meta($post->ID,'recruit-table',true) == 'government'): ?>
  <table class="recruit-table">
    <tbody>
      <tr>
        <th colspan="2" class="colspan2">案件名</th>
        <td>
          <? $txt = get_field('company-name'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="2">勤務地</th>
        <td>
          <? $txt = get_field('company-address'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th rowspan="3" colspan="1" class="colspan1">求人概要</th>
          <th colspan="1">募集職種</th>
          <td>
            <? $txt = get_field('company-recruit'); if($txt){ ?>
            <? echo $txt; ?>
            <? } ?>
          </td>
      </tr>
      <tr>
        <th colspan="1">業務内容</th>
        <td>
          <? $txt = get_field('company-content'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="1">求める能力</th>
        <td>
          <? $txt = get_field('company-skill'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="2">条件</th>
        <td>
          <? $txt = get_field('company-character'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
      <tr>
        <th colspan="2">その他</th>
        <td>
          <? $txt = get_field('company-etc'); if($txt){ ?>
          <? echo $txt; ?>
          <? } ?>
        </td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>
