import React from 'react';

import IntroWithIcons from './IntroWithIcons.twig';

import IntroWithIconsData from './IntroWithIcons.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Intro With Icons' };

export const introWithIcons = () => (
  <div>
    <header style={{ paddingBottom: '10rem' }}>
      <h2>This requires a header banner</h2>
    </header>
    <div
      dangerouslySetInnerHTML={{ __html: IntroWithIcons(IntroWithIconsData) }}
    />
  </div>
);
