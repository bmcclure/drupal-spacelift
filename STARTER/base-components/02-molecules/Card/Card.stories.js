import React from 'react';

import Card from './Card.twig';

import CardData from './Card.yml';
import CardTightData from './Card--tightspace.yml';

// Todo: Remove if we can load via twig attach_library()
import '../../../src/js/lozad-init';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Card' };

export const card = () => (
  <div dangerouslySetInnerHTML={{ __html: Card(CardData) }} />
);

export const tightCard = () => (
  <div dangerouslySetInnerHTML={{ __html: Card(CardTightData) }} />
);
