import React from 'react';

import IconIntro from './IconIntro.twig';

import IconIntroData from './IconIntro.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Icon Intro' };

export const iconIntro = () => (
  <div dangerouslySetInnerHTML={{ __html: IconIntro(IconIntroData) }} />
);
