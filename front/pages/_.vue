<template>
  <div>
    <t3-dynamic
      :data="t3page.content"
      :type="t3page.appearance.backendLayout"
      layout
    />
    <PageInformation/>
  </div>
</template>
<script src="~typo3/pages/_.vue"/>
