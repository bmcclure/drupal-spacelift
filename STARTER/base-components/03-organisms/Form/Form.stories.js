import React from 'react';

import Form from './Form.twig';

import FormData from './Form.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Form' };

export const form = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Form(FormData),
    }}
  />
);
