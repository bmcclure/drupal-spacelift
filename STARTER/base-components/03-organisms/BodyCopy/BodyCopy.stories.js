import React from 'react';

import BodyCopy from './BodyCopy.twig';

import BodyCopyData from './BodyCopy.yml';
import BodyCopyShareData from './BodyCopy--withShare.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Body Copy' };

export const bodyCopy = () => (
  <div>
    <section style={{ paddingBottom: '10rem', textAlign: 'center' }}>
      <h1>Body Copy</h1>
      <p>This needs to go below Header Banner Image</p>
    </section>
    <div
      dangerouslySetInnerHTML={{
        __html: BodyCopy(BodyCopyData),
      }}
    />
  </div>
);

export const BodyCopyShareExample = () => (
  <div>
    <section style={{ paddingBottom: '10rem', textAlign: 'center' }}>
      <h1>Body Copy</h1>
      <p>This needs to go below Header Banner Image</p>
    </section>
    <div
      dangerouslySetInnerHTML={{
        __html: BodyCopy(BodyCopyShareData),
      }}
    />
  </div>
);
