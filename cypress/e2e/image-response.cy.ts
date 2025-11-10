import {StartPage} from "@/pages/StartPage"

describe('Image validation.', () => {
  const startPage: StartPage = new StartPage();
  
  beforeEach(() => {
    startPage.visit();
    startPage.waitForPageLoaded();  
  });

  it('All images have response status 200', () => {
    cy.ttValidateAllImagesResponseStatusOk();  
  });  

})
