<!-- generator="<?= $generator ?>" -->
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">

  <channel>
    <title><?= xml($title) ?></title>
    <link><?= $link ?></link>
    <generator><?= xml($generator) ?></generator>
    <lastBuildDate><?= date('r', $modified) ?></lastBuildDate>
    <atom:link href="<?= $url ?>" rel="self" type="application/rss+xml" />

    <?php if (!empty($description)): ?>
    <description><?= xml($description) ?></description>
    <?php endif ?>

    <?php foreach ($items as $item): ?>
    <item>
    <title><?= $item->title()->xml() ?></title>
      <link><?= $item->url() ?></link>
      <pubDate><?= $datefield === 'modified' ? $item->modified('r') : $item->date()->toDate('%A, %e. %B %G %H:%M', $datefield) ?></pubDate>
      <description>
        <![CDATA[
          <?php if ($cover = $item->{$imgfield}()->toFile()): ?>
          <figure><?= $cover ?></figure>
          <?php endif ?>

          <?= $item->{$subfield}()->kirbytext() ?>
          <?= $item->{$textfield}()->kirbytext() ?>
          <a href="mailto:marc@neu-gierig.fm?subject=Meine Antwort zu: <?= $item->title() ?>">Per Email antworten</a>
        ]]>
      </description>
    </item>
    <?php endforeach ?>
  </channel>
</rss>
