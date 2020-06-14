// We don't speak french here.

/**
 *
 * @param  {string} eggs
 * @param {string} chicken
 *
 * @returns {this} sorted array
 */
const chickenOrEggs = (eggs, chicken) => {
    return [eggs, chicken].sort();
};

// English
chickenOrEggs('eggs', 'chicken');
chickenOrEggs('atody', 'akoho');
chickenOrEggs('🥚', '🐤');
