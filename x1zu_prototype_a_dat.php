<?php

/*
 * API Specification for x1zu_prototype_a_dat
 * A data-driven CLI tool tracker
 *
 * Endpoints:
 */

// 1. GET /trackers
// Returns a list of all available trackers
function getTrackers() {
  // Return a JSON array of tracker objects
  // {
  //   "id": int,
  //   "name": string,
  //   "description": string
  // }
}

// 2. GET /trackers/:id
// Returns a single tracker by ID
function getTracker($id) {
  // Return a JSON object with tracker details
  // {
  //   "id": int,
  //   "name": string,
  //   "description": string
  // }
}

// 3. POST /trackers
// Creates a new tracker
function createTracker($name, $description) {
  // Return a JSON object with the new tracker's ID
  // {
  //   "id": int
  // }
}

// 4. PUT /trackers/:id
// Updates a tracker by ID
function updateTracker($id, $name, $description) {
  // Return a JSON object with a success message
  // {
  //   "message": string
  // }
}

// 5. DELETE /trackers/:id
// Deletes a tracker by ID
function deleteTracker($id) {
  // Return a JSON object with a success message
  // {
  //   "message": string
  // }
}

// 6. GET /trackers/:id/data
// Returns a list of data points for a tracker
function getTrackerData($id) {
  // Return a JSON array of data point objects
  // {
  //   "id": int,
  //   "tracker_id": int,
  //   "value": mixed,
  //   "timestamp": datetime
  // }
}

// 7. POST /trackers/:id/data
// Creates a new data point for a tracker
function createTrackerData($id, $value) {
  // Return a JSON object with the new data point's ID
  // {
  //   "id": int
  // }
}

// 8. GET /trackers/:id/stats
// Returns statistics for a tracker
function getTrackerStats($id) {
  // Return a JSON object with tracker statistics
  // {
  //   "min": mixed,
  //   "max": mixed,
  //   "avg": mixed,
  //   "count": int
  // }
}

?>