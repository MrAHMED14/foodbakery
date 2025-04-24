import os

def rename_jpg_images(folder_name):
    script_dir = os.path.dirname(os.path.abspath(__file__))
    folder_path = os.path.join(script_dir, folder_name)

    all_files = os.listdir(folder_path)

    # Filter JPGs (case-insensitive)
    jpg_files = [f for f in all_files if f.lower().endswith('.jpg')]

    # Check if all are JPGs
    if len(jpg_files) != len(all_files):
        print("Error: Folder contains non-JPG files.")
        return

    # Sort to keep order predictable
    jpg_files.sort()

    # Step 1: Rename to temp names to avoid conflicts
    temp_names = []
    for idx, filename in enumerate(jpg_files):
        temp_name = f"temp_rename_{idx}.jpg"
        os.rename(
            os.path.join(folder_path, filename),
            os.path.join(folder_path, temp_name)
        )
        temp_names.append(temp_name)

    # Step 2: Rename from temp to final names
    for idx, temp_name in enumerate(temp_names, start=1):
        final_name = f"gallery-image-{idx}.jpg"
        os.rename(
            os.path.join(folder_path, temp_name),
            os.path.join(folder_path, final_name)
        )

    print(f"Renaming completed. Total images renamed: {len(temp_names)}")

# Example usage
rename_jpg_images("restaurant-18/gallery")


