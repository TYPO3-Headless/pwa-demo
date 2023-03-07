<template>
  <div>
    <p><strong>Without parsing</strong></p>
    {{ bodytext }}
    <p><strong>with parsing</strong></p>
    <T3HtmlParser :content="bodytext"/>
  </div>
</template>
<script src="~typo3/components/T3CeText"/>
