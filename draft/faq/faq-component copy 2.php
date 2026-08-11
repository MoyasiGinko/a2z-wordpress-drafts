<?php
/**
 * FAQ component partial.
 *
 * Expected usage:
 *   require_once __DIR__ . '/faq-component.php';
 *   render_faq_component($faqData, 6);
 */

if (!function_exists('render_faq_component')) {
    function render_faq_component(array $data, $limit = 6)
    {
        $list = [];
        foreach ($data as $cat) {
            if (empty($cat['items']) || !is_array($cat['items'])) {
                continue;
            }

            foreach ($cat['items'] as $item) {
                $list[] = [
                    'item' => $item,
                    'label' => isset($cat['label']) ? $cat['label'] : '',
                ];
            }
        }

        $total = count($list);
        ob_start();
        ?>
<section class="faq-section">
  <div class="faq-inner">
    <div class="faq-header">
      <div class="rv">
        <h2 class="faq-title">
          Questions we<br /><span>answer every day.</span>
        </h2>
      </div>
    </div>

    <div class="faq-grid rv d3" id="faqGrid" data-limit="<?= (int) $limit ?>" data-total="<?= (int) $total ?>">
      <?php
              $left = [];
              $right = [];
              foreach ($list as $i => $row) {
                  $hidden = $i >= $limit ? ' hidden' : '';
                  $num = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
                  $q = htmlspecialchars($row['item']['q'] ?? '', ENT_QUOTES);
                  $a = htmlspecialchars($row['item']['a'] ?? '', ENT_QUOTES);
                  $cta = htmlspecialchars($row['item']['cta'] ?? '', ENT_QUOTES);

                  $itemHtml = '<div class="faq-item' . $hidden . '" data-index="' . $i . '">'
                    . '<div class="faq-q">'
                    . '<span class="faq-q-text">'
                    . '<span class="faq-q-num" aria-hidden="true">' . $num . '</span>'
                    . '<span class="faq-q-question">' . $q . '</span>'
                    . '</span>'
                    . '<span class="faq-toggle"><svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>'
                    . '</div>'
                    . '<div class="faq-a"><div class="faq-a-inner">'
                    . '<p class="faq-a-text">' . $a . '</p>'
                    . '<a href="/contact/" class="faq-cta">' . $cta . '</a>'
                    . '</div></div>'
                    . '</div>';

                  if ($i % 2 === 0) {
                      $left[] = $itemHtml;
                  } else {
                      $right[] = $itemHtml;
                  }
              }
              ?>
      <div class="faq-col">
        <?php foreach ($left as $html) { echo $html; } ?>
      </div>
      <div class="faq-col">
        <?php foreach ($right as $html) { echo $html; } ?>
      </div>

      <?php if ($total > $limit):
                  $remaining = $total - $limit;
              ?>
      <div class="see-more-wrap">
        <div class="see-more-bar"></div>
        <button class="btn-see" data-limit="<?= (int) $limit ?>" data-total="<?= (int) $total ?>">
          <svg viewBox="0 0 24 24">
            <polyline points="6 9 12 15 18 9" />
          </svg>
          See <?= (int) $remaining ?> more question<?= $remaining > 1 ? 's' : '' ?> <span
            class="see-count"><?= (int) $limit ?> / <?= (int) $total ?></span>
        </button>
      </div>
      <?php endif; ?>
    </div>

    <div class="faq-footer rv d3">
      <p class="faq-footer-txt">
        Still have questions? <strong>We respond the same day.</strong>
      </p>
      <a href="/contact/" class="btn-blue">Book a free consultation →</a>
    </div>
  </div>
</section>

<script>
(function() {
  var gridEl = document.getElementById('faqGrid');
  if (!gridEl) return;

  var LIMIT = parseInt(gridEl.dataset.limit, 10) || 6;
  var total = parseInt(gridEl.dataset.total, 10) || gridEl.querySelectorAll('.faq-item').length;

  function syncRowHeights() {
    var columns = gridEl.querySelectorAll('.faq-col');
    if (columns.length !== 2) return;
    var leftItems = columns[0].querySelectorAll('.faq-item');
    var rightItems = columns[1].querySelectorAll('.faq-item');
    var maxRows = Math.max(leftItems.length, rightItems.length);

    leftItems.forEach(function(el) {
      el.classList.add('is-matched');
      el.style.removeProperty('--faq-match-height');
    });
    rightItems.forEach(function(el) {
      el.classList.add('is-matched');
      el.style.removeProperty('--faq-match-height');
    });

    for (var i = 0; i < maxRows; i++) {
      var leftItem = leftItems[i];
      var rightItem = rightItems[i];
      if (!leftItem && !rightItem) continue;

      var leftHeight = leftItem && leftItem.offsetParent !== null ? leftItem.offsetHeight : 0;
      var rightHeight = rightItem && rightItem.offsetParent !== null ? rightItem.offsetHeight : 0;
      var matchedHeight = Math.max(leftHeight, rightHeight);

      if (leftItem) leftItem.style.setProperty('--faq-match-height', matchedHeight + 'px');
      if (rightItem) rightItem.style.setProperty('--faq-match-height', matchedHeight + 'px');
    }
  }

  gridEl.querySelectorAll('.faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
      var item = q.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      gridEl.querySelectorAll('.faq-item.open').forEach(function(el) {
        el.classList.remove('open');
      });
      if (!isOpen) item.classList.add('open');
    });
  });

  var btn = gridEl.querySelector('.btn-see');
  if (btn) {
    var expanded = false;
    var remaining = total - LIMIT;

    function setBtn() {
      btn.innerHTML = expanded ?
        '<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>Show less <span class="see-count">' +
        total + ' / ' + total + '</span>' :
        '<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>See ' + remaining + ' more question' + (
          remaining > 1 ? 's' : '') + ' <span class="see-count">' + LIMIT + ' / ' + total + '</span>';
      expanded ? btn.classList.add('expanded') : btn.classList.remove('expanded');
    }

    setBtn();
    btn.addEventListener('click', function() {
      expanded = !expanded;
      if (expanded) {
        gridEl.querySelectorAll('.faq-item.hidden').forEach(function(el) {
          el.classList.remove('hidden');
        });
      } else {
        gridEl.querySelectorAll('.faq-item').forEach(function(el) {
          if (parseInt(el.dataset.index, 10) >= LIMIT) {
            el.classList.add('hidden');
          }
        });
        gridEl.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
      setTimeout(function() {
        syncRowHeights();
      }, 460);
      setBtn();
    });
  }

  requestAnimationFrame(function() {
    syncRowHeights();
  });
  window.addEventListener('resize', function() {
    requestAnimationFrame(syncRowHeights);
  });

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      });
    }, {
      threshold: 0.07
    });
    document.querySelectorAll('.rv').forEach(function(el) {
      io.observe(el);
    });
  } else {
    document.querySelectorAll('.rv').forEach(function(el) {
      el.classList.add('in');
    });
  }
})();
</script>
<?php
        return ob_get_clean();
    }
}